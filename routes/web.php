<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserController;
use App\Http\controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// for login page only 
Route::get('/login',[UserController::class,'index']);
Route::post('/login',[UserController::class,'loginl']);

//for product page only
Route::get('/',[ProductController::class,'index']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cart_item',[ProductController::class,'cartShow']);
Route::get('/logout',function(){
    Session::forget('user'); 
    return redirect('login');
});
Route::get('/remove-cart-item/{id}',[ProductController::class,'removeCartItem']);

Route::get('/order-now',[ProductController::class,'orderNow']);
Route::get('/pay-now',[ProductController::class,'payNow']);

Route::get('/register',[UserController::class,'registerUser']);
Route::post('/register',[UserController::class,'registerData']);


//report from user
Route::post('/Report', [ProductController::class,'Report']) ;
Route::get('/Report', [ProductController::class,'help']) ;
Route::view('/Report', 'Report');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
