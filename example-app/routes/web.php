<?php

use App\Http\Controllers\backOfficeUpdateController;
use App\Http\Controllers\ProfileController;

//use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

use App\Http\Controllers\CartController;
use App\Http\Controllers\FormulairController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOfficeController;
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

Route::get('/home', [HomeController::class, 'Home']);


Route::get('/product/{id}', [ProductController::class, 'productid']);


Route::get('/product-list', [ProductController::class, 'Product_list']);


Route::get('/cart', [CartController::class, 'Cart']);


Route::get('/formulair', [FormulairController::class, 'formulair']);


Route::get('/BackOffice', [BackOfficeController::class, 'backOffice'])->name('backoffice');
Route::post('/Product/store', [BackOfficeController::class, 'store'])->name('product.store');

Route::get('/BackOfficeUpdate', [BackOfficeUpdateController::class, 'loadlist'])->name('loadlist');
Route::put('/Product/update', [BackOfficeUpdateController::class, 'update'])->name('product.update');
Route::get('/BackOfficeUpdate/{product}', [BackOfficeUpdateController::class, 'zzccmxtp'])->name('zzccmxtp');
Route::delete('/BackOfficeDelete/{id}', [BackOfficeUpdateController::class, 'destroy'])->name('product.destroy');
Route::get('/', function () {
    return view('Welcome');
});

Route::get('/dbconnect', function () {
    return view('dbconnect');

});

