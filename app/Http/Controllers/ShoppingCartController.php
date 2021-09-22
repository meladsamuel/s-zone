<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\VendingMachine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpMqtt\Client\Facades\MQTT;
use function array_key_exists;
use function dd;
use function hash;
use function redirect;
use function serialize;
use function str_repeat;
use function unserialize;
use function url;
use function view;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $products = Session::exists('cart') && Session::get('cart');
        return view('front.shopping-cart')->with('products', $products);
    }

    public function addToCart(Request $request): array
    {
        $product = Product::find($request['product']['productId']);
        Cart::add($product);
        return [Cart::content(), Cart::total()];
    }

    public function removeItem()
    {
    }

    public function removeProduct($id): array
    {
        Cart::remove($id);
        return ['success' => true, 'price' => Cart::total(), 'count' => Cart::count()];

    }

    public function makeOrder(): array
    {
        if (!Auth::check())
            return ["status" => false];
        $userId = Auth::id();
        $paymentMethod = "CARD";
        $merchant_sec_key = "a93e211e-be88-4d4a-9845-978db0949f0b";
        $amount = Cart::total();
        $cart = Cart::content();
        $encode = serialize($cart);
        $chargeItems = [];
        foreach ($cart as $id => $item)
            $chargeItems[] = ["itemId" => $id, "price" => $item["price"], "quantity" => $item["qty"]];
        $order = new Order();
        $order->products = $encode;
        $order->user_id = $userId;
        $order->payment_mode = '';
        $order->save();
        $charge = [];
        $charge["merchantCode"] = "1tSa6uxz2nSBnDokNaG9wA==";
        $charge["merchantRefNum"] = $order->id;
        $charge["paymentExpiry"] = "1631138400000";
        $charge["returnUrl"] = url("/scan");
        $charge["authCaptureModePayment"] = false;
        $charge["signature"] = hash(
            'sha256',
            $charge["merchantCode"] .
            $charge["merchantRefNum"] .
            $userId .
            $paymentMethod .
            $amount .
            $merchant_sec_key
        );
        $charge["chargeItems"] = $chargeItems;

        return ["charge" => $charge, "status" => true];
    }

    public function checkout(Request $request)
    {
        if (!Auth::check())
            return redirect('/login');
        $vending = $request->all();
        dd($vending);
        $products = Cart::content();
        $string = '';
        foreach ($products as $product)
            $string .= str_repeat($product['rowId'], $product['qty']);
        MQTT::publish('vending-machine-checkout', $string);
        MQTT::publish('vending-machine-checkout', (string)$vending);
    }

    public function scanQrCode(Request $request)
    {
//        if (!Auth::check())
//            return redirect('/login');
//        $vending = $request->all();
//        dd($vending);
//        $query = $request->query();
//        if (isset($query["statusCode"]) && $query["statusCode"] == 499) {
//            return $query["statusDescription"];
//        }
//        return $request->query();
        return view("front.scan");
    }

    public function pickUp(Request $request)
    {
        $ref_number = $request->get("refNumber");
        $vending_id = $request->get("vending");
        $user = Auth::user();
        $vending = VendingMachine::find($vending_id);
        $products_in_order = unserialize($user->orders()->find($ref_number)->products);
        $products_in_vending = $vending->products;
        $result = "";
        foreach ($products_in_vending as $product_in_vending) {
            if (array_key_exists($product_in_vending->id, $products_in_order)) {
                $quantity = $products_in_order[$product_in_vending->id]["qty"];
                $result .= str_repeat($product_in_vending->pivot->position, $quantity);
            }
        }
        MQTT::publish("IN-SZONE-$vending_id", $result);
    }


}
