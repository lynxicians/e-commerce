<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;

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

//Route untuk membuat link
//status 404 -> Not Found -> apapun itu web coba akses tapi gak ketemu
//505 error server -> salah syntax atau logic
//200 Sukses

Route::group(['middleware' => ['auth']], function(){
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/create-product', [CartController::class, 'storeProduct'])->name('createProduct');
    Route::get('/order/{ProductID}',[OrderController::class, 'order']);
    Route::post('/order/{ProductID}',[OrderController::class, 'pesan']);
    Route::get('/checkout', [CheckoutController::class, 'checkout']);
    
});
Route::group(['middleware' => ['guest']], function(){
    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::get('/', [HomeController::class, 'index']);
Route::post('/logout', [LoginController::class, 'logout']);

