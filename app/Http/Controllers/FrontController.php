<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\VendingMachine;

class FrontController extends Controller
{
    public function index()
    {
        //$m1 = VendingMachine::find(1);
       // dd($m1->products[0]->id);
        $products = Product::all();
        return view("front.home")->with('products', $products);
    }
}
