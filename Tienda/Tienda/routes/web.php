<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RootController;
use App\Http\Controllers\PagoController;
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

Auth::routes(['verify' => true]);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/carrito', [HomeController::class, 'carritoCompra'])->name('carrito');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/pago', [HomeController::class, 'pago'])->name('pago');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('profile');
Route::resource('admin',ProductoController::class);
Route::get('administradores',[RootController::class,'index']);
Route::post('administradores',[RootController::class,'store']);
Route::post('pago',[PagoController::class,'insertarPago']);