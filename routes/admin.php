<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Middleware\Requests\LoginRequest;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\MachineController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductmachineController;
use App\Http\Controllers\Admin\QrcodeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'Admin','middleware' => 'auth:admin'], function() {
        Route::get('/', [DashboardController::class, 'index']) -> name('admin.dashboard');

});


Route::group(['namespace'=> 'Admin', 'middleware' => 'guest:admin'], function(){
    Route::get('/login' ,[LoginController::class ,'getLogin'])->name('get.admin.login');
    Route::post('/login' ,[LoginController::class ,'login'])->name('admin.login');


 });
              ############################  routes products  ###########################
      Route::namespace('admin')->group(function(){
        Route::get('/products' ,[ProductsController::class ,'index'])->name('admin.products.index');
       Route::get('/products/create' ,[ProductsController::class, 'create'])->name('admin.products.create');
     //  Route::get('/products/create' ,[CategoryController::class, 'index'])->name('admin.products.create');
       Route::post('/products/store' ,[ProductsController::class, 'store'])->name('admin.products.store');
       Route::get('/products/edit/{id}' ,[ProductsController::class ,'edit'])->name('admin.products.edit');
       Route::post('/products/update/{id}' ,[ProductsController::class ,'update'])->name('admin.products.update');
       Route::get('/products/delete/{id}' ,[ProductsController::class ,'destroy'])->name('admin.products.destroy');
         ############################ end routes products  ###########################

         ############################  routes machine  ###########################
         Route::get('/machine' ,[MachineController::class ,'index'])->name('admin.machine.index');
       Route::get('/machine/create' ,[MachineController::class, 'create'])->name('admin.machine.create');
       Route::post('/machine/store' ,[MachineController::class, 'store'])->name('admin.machine.store');
       Route::get('/machine/edit/{id}' ,[MachineController::class ,'edit'])->name('admin.machine.edit');
       Route::post('/machine/update/{id}' ,[MachineController::class ,'update'])->name('admin.machine.update');
       Route::get('/machine/delete/{id}' ,[MachineController::class ,'destroy'])->name('admin.machine.destroy');
         ############################ end routes machine  ###########################

           ############################  routes orders ###########################
        //    Route::get('/order' ,[OrderController::class ,'index'])->name('admin.order.index');
            ############################ end routes orders  ###########################

            ############################ product in vending machine ###########################

             ############################  product in vending machine ###########################
        Route::get('/machine/productmachine/{id}' ,[ProductmachineController::class ,'index'])->name('admin.machine.productmachine');
        Route::get('/machine/productmachinecreate/{id}' ,[ProductmachineController::class ,'create'])->name('admin.machine.productmachinecreate');
        Route::post('/machine/productmachine/store' ,[ProductmachineController::class ,'store'])->name('admin.machine.productmachine.store');

Route::get('/machine/qrcode/{id}' ,[QrcodeController::class ,'index'])->name('admin.machine.qrcode');

});


