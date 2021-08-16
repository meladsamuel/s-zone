<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;

class LoginController extends Controller
{
    public function getLogin() {
        return view ('admin.Auth.login');
    }
       
    public function save(){
        $admin = new App\Models\Admin();
        $admin -> name ="ashraf ahmed";
         $admin -> email ="ashraf2kk178@gmail.com";
         $admin -> photo ="";
         $admin -> password = bcrypt("ashraf_gad2467");
         $admin -> save();
 
     }

    public function login(LoginRequest $request) {
        //make validation
        $remember_me = $request->has('remember_me') ? true : false;
        // dd($request->input('email'), $request->input("password"));
        // dd(auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me));
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
           // notify()->success('تم الدخول بنجاح  ');
           //return "auth is work";

             return redirect()->route('admin.dashboard');   
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
       return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
}
