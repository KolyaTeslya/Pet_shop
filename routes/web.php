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



Route::get('/', [\App\Http\Controllers\ProductController::class, 'shopIndex'])->name('home');

Route::get('pet-shop/main', [\App\Http\Controllers\ProductController::class, 'shopIndex'])
    ->name('pet-shop/main');

Route::get('pet-shop/food', [\App\Http\Controllers\ProductController::class, 'shopList'])
    ->name('pet-shop/food');

Route::get('pet-shop/contact', [\App\Http\Controllers\ProductController::class, 'contact'])
    ->name('pet-shop/contact');

Route::get('pet-shop/about',[\App\Http\Controllers\PetController::class, 'about'])
    ->name('pet-shop/about');

Route::get('pet-shop/product-details', [\App\Http\Controllers\ProductController::class, 'productDetails'])
    ->name('pet-shop/product-details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('pet-shop/add-cart', [\App\Http\Controllers\ProductController::class, 'addCart'])
    ->name('pet-shop/add-cart');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
