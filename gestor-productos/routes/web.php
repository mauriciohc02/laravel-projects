<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
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


Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');

Route::get('/register/products', [ProductsController::class, 'index'])->name('register_products');

Route::post('/register/products', [ProductsController::class, 'store']);

Route::post('/delete/product', [ProductsController::class, 'delete'])->name('delete_products');

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
