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
    return view('pet-shop/index');
});

Route::get('pet-shop/main', function (){
    return view('pet-shop/index');
})->name('pet-shop/main');

Route::get('pet-shop/food', [\App\Http\Controllers\ProductController::class, 'shopList'])
    ->name('pet-shop/food');

Route::get('pet-shop/contact', function (){
    return view('pet-shop/contact');
})->name('pet-shop/contact');

Route::get('pet-shop/about',[\App\Http\Controllers\PetController::class, 'about'])
    ->name('pet-shop/about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
