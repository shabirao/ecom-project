<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

  Route::get('/login', function () {
      return view('login');
  });
  Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

//  route::get("product",[UserController::class,'index']);
 route::post("/login",[UserController::class,'Login']);
  route::get("/",[ProductController::class,'index']);
 route::get("deatil/{id}",[ProductController::class,'deatil']);
 route::get("search",[ProductController::class,'search']);
 route::post("add_to_cart",[ProductController::class,'addToCart']);
 route::get("cartlist",[ProductController::class,'cartlist']);
 route::get("removecart/{id}",[ProductController::class,'removeCart']);
 route::post("orderplace",[ProductController::class,'orderPlace']);
 route::get("ordernow",[ProductController::class,'orderNow']);
 route::get("/myorder",[ProductController::class,'myOrder']);

