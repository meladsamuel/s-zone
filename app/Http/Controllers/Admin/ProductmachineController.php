<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\VendingMachine;


class ProductmachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       // return ('jojojojoj');

        // $products = Product::all();
        // $product_vendingmachines = product_vendingmachine::all();
        $VendingMachines = VendingMachine::find($id);
        // dd($VendingMachines->products[0]->name);
return view('admin.machine.productmachine')->with('vendingMachines',$VendingMachines );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $products = Product::all();
        $machine = VendingMachine::find($id);
        // $machine->products()->attach($products_id,["postion" => $postion, "number"=>$number]);
        return view('admin.machine.productmachinecreate')->with('products',$products )->with('machine', $machine);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->number);
        $machine = VendingMachine::find($request->machine);
        // $product_id = $request->position_a;
        // $number = $request->number;
        $product_list = [];
        foreach($request->number  as $key => $number){
            $product_list[$key]["number_of_product"] = $number;
        }
        foreach($request->positions as $key => $position){
            $product_list[$key]["product_id"] = $position;
        }

        // dd($product_list);
        foreach($product_list as $position => $product){

            $machine->products()->attach($product['product_id'],["position" => $position, "number_of_product"=>$product['number_of_product']]);
        }
            dd($machine);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
