<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendingMachine;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machines = VendingMachine::all();
        return view('admin.machine.index', compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.machine.create');
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
            VendingMachine::create([
                "name"=>$request->name,
                "ip_address"=>$request->ip_address,
                "longitude"=>$request->longitude,
                "latitude"=>$request->latitude,
            ]);
            return redirect()->route('admin.machine.index')->with(['success' => 'تم الحفظ بنجاح']);
        }catch (\Exception $ex) {
         return redirect()->route('admin.machine.index')->with(['error' => 'هناك خطاء ما يرجي المحاولة فيما بعد']);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machines = VendingMachine::find($id);
         return view('admin.machine.edit',compact('machines'));
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
        try{
        $machines = VendingMachine::find($id);
        $machines->name = $request->name;
        $machines->ip_address = $request->ip_address;
        $machines->longitude = $request->longitude;
        $machines->latitude = $request->latitude;
        $machines->update();
        return redirect()->route('admin.machine.index')->with(['success' => 'تم تحديث  بنجاح']);
         }catch (\Exception $ex) {
            return redirect()->route('admin.machine.index')->with(['error' => 'هناك خطاء ما يرجي المحاولة فيما بعد']);
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
        //
    }
}
