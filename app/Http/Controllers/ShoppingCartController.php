<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpMqtt\Client\Facades\MQTT;
use function str_repeat;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $products = Session::exists('cart') && Session::get('cart');
        return view('front.shopping-cart')->with('products', $products);
    }

    public function addToCart(Request $request)
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

    public function checkout()
    {
        $products = Cart::content();
        $string = '';
        foreach ($products as $product)
            $string .= str_repeat($product['rowId'], $product['qty']);
        MQTT::publish('vending-machine-checkout', $string);
    }
}
