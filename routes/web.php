<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

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
Route::get("/",[ProductController::class, 'index']);
Route::get('login', function () {
    return view('login');
});

Route::get('logout', function () {
    Session::forget("user");
    return view('login');
});

Route::post("login",[UserController::class, 'login']);
//Route::post("register",[UserController::class, 'register']);
Route::post("add-to-cart",[ProductController::class, 'addToCart']);

Route::get("product-detail/{id}", [ProductController::class, 'detail']);
Route::get("cart", [ProductController::class, 'cartList']);

Route::view("/register", 'register');
