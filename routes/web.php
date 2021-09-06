<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\OrderprofileController;

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

Route::get('/', [FrontController::class, 'index'])->name("main.page");
Route::post('/add-to-cart', [ShoppingCartController::class, 'addToCart'])->name('shopping.cart');
Route::delete('/shopping-cart/products/{id}', [ShoppingCartController::class, 'removeProduct']);
Route::post('/checkout', [ShoppingCartController::class, 'checkout'])->name('checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [OrderprofileController::class, 'index'])->name('home');

Route::view("qrcode","qrcode");

// Route::get('qr-code-g', function () {
//     \QrCode::size(500)
//             ->format('png')
//             ->generate('www.google.com', public_path('images/qrcode.png'));
// return view('qrcode');
// });
