<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendingMachine;

class MapController extends Controller
{
    public function index()
    {
        $machines = VendingMachine::all();
        return view('front', compact('machines'));
    }
    public function machines() {
        return  VendingMachine::all();
    }
}
