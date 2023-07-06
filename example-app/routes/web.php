<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'Home']);


Route::get('/product/{id}', [ProductController::class, 'ProductId']);


<<<<<<< HEAD
Route::get('/product-list/', [ProductController::class, 'Product_list']);
=======
Route::get('/product', [ProductController::class, 'product-details']);
>>>>>>> f39fb0a (modif product details)


Route::get('/cart', [CartController::class, 'Cart']);

