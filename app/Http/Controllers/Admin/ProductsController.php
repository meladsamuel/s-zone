<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        try{ 
        //dd($request->all());
        if($request->hasFile('img')){
            $file = $request->img;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/products', $new_file);   
        }
        Product::create([
            "name"=>$request->name,
            "img"=>'storage/products/'. $new_file,
            "description"=>$request->description,
            "price"=>$request->price,
            "exp_date"=>$request->exp_date,
        ]);
        return redirect()->route('admin.products.index')->with(['success' => 'تم الحفظ بنجاح']);
       }catch (\Exception $ex) {
        return redirect()->route('admin.products.index')->with(['error' => 'هناك خطاء ما يرجي المحاولة فيما بعد']);    
       }
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
        $products = Product::find($id);
         return view('admin.products.edit',compact('products'));
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
        //dd($request->all());
        try{
        $products = Product::find($id);
        if($request->hasFile('img')){
            $file = $request->img;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/products', $new_file);   
        }
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->description = $request->description;
        $products->exp_date = $request->exp_date;
        $products->update();
        return redirect()->route('admin.products.index')->with(['success' => 'تم تحديث  بنجاح']);
         }catch (\Exception $ex) {
            return redirect()->route('admin.products.index')->with(['error' => 'هناك خطاء ما يرجي المحاولة فيما بعد']);    
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
        $products = Product::find($id);
        $products->destroy($id);
        return redirect()->route('admin.products.index')->with(['success' => 'تم الحذف  بنجاح']);
    }catch (\Exception $ex) {
        return redirect()->route('admin.products.index')->with(['error' => 'هناك خطاء ما يرجي المحاولة فيما بعد']);    
       }
    }
}
