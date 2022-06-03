<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $products= App\Models\Product::all();
    return view('welcome',compact('products'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('stripe',[App\Http\Controllers\StripePaymentController::class ,'stripe']);
Route::post('stripe',[App\Http\Controllers\StripePaymentController::class , 'stripePost'])->name('stripe.post');
Route::get('tenis', [App\Http\Controllers\ProductController::class, 'listTenis'])->name('tenis');