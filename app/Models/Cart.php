<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;
use function array_key_exists;

class Cart
{
    private function __construct()
    {
    }

    static private function isSet(): bool
    {
        if (!Session::exists('cart'))
            return false;
        return true;
    }

    static public function add(Product $product)
    {
        $cart = Session::exists('cart') ? Session::get('cart') : ['items' => [], 'totalPrice' => 0];
        $item = ['name' => $product['name'], 'img' => $product['img'], 'price' => $product['price'], 'qty' => 0, 'rowId' => $product['id']];
        if (array_key_exists($product['id'], $cart['items']))
            $item = $cart['items'][$product['id']];
        $item['qty']++;
        $cart['items'][$product['id']] = $item;
        $cart['totalPrice'] += $product['price'];
        Session::put('cart', $cart);
    }

    static public function content(): array
    {
        if (!Cart::isSet())
            return [];
        return Session::get('cart')['items'];
    }

    static public function get($id)
    {
        if (!Cart::isSet())
            return [];
        $cart = Session::get('cart');
        if (!array_key_exists($id, $cart['items']))
            return [];
        return $cart['items'][$id];
    }

    static public function total()
    {
        if (!Cart::isSet())
            return 0;
        return Session::get('cart')['totalPrice'];
    }

    static public function count()
    {
        $count = 0;
        if (!Cart::isSet())
            return $count;
        foreach (Cart::content() as $item)
            $count += $item['qty'];
        return $count;
    }

    static public function remove($id): bool
    {
        if (!Cart::isSet())
            return false;
        $cart = Session::get('cart');
        if (!array_key_exists($id, $cart['items']))
            return false;

        $items = $cart['items'];
        $price = $items[$id]['price'];
        $qty = $items[$id]['qty'];
        $cart['totalPrice'] -= $qty * $price;
        unset($items[$id]);
        $cart['items'] = $items;

        Session::put('cart', $cart);
        return true;
    }

    static public function itemDecrement($id): bool
    {
        if (!Cart::isSet())
            return false;
        $cart = Session::get('cart');
        if (!array_key_exists($id, $cart['items']))
            return false;

        $items = $cart['items'];
        $price = $items[$id]['price'];
        $cart['totalPrice'] -= $price;
        $cart['items'][$id]['qty'] -= 1;

        if ($cart['items'][$id]['qty'] === 0)
            unset($cart['items'][$id]);

        Session::put('cart', $cart);
        return true;
    }
    static public function destroy(): void
    {
        Session::put('cart', ['items' => [], 'totalPrice' => 0]);
    }

}
