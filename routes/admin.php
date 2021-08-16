<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Middleware\Requests\LoginRequest;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;

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
       Route::post('/products/store' ,[ProductsController::class, 'store'])->name('admin.products.store');
       Route::get('/products/edit/{id}' ,[ProductsController::class ,'edit'])->name('admin.products.edit');
       Route::post('/products/update/{id}' ,[ProductsController::class ,'update'])->name('admin.products.update');
       Route::get('/products/delete/{id}' ,[ProductsController::class ,'destroy'])->name('admin.products.destroy');
         ############################ end routes products  ###########################
});
