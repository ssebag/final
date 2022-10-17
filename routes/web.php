<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\cartController;

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
Route::get('/ourProduct/{id}',[productController::class,'find']);
Route::get('jackets',[productController::class,'sort_jacket']);
Route::get('sweaters',[productController::class,'sort_sweaters']);
Route::get('dresses',[productController::class,'sort_dresses']);
Route::get('pants',[productController::class,'sort_pants']);
Route::get('skirts',[productController::class,'sort_skirts']);
Route::get('shoes',[productController::class,'sort_shoes']);

Route::get('/',[productController::class,'index']);
Route::get('/ourproduct', [productController::class,'home_page']);

Route::get('/search',[productController::class,'search'])->name('page.search');

Route::post('cart/add{id}',[cartController::class,'addToCart']);
Route::get('cart',[cartController::class,'showCart']);
Route::delete('cart/{id}',[cartController::class,'destroy'])->name('cart.destroy');
Route::get('buy',function(){
    return view ('buy');
});





Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [productController::class, 'index'])->name('home');
