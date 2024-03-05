<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos',[ProductoController::class,'showAll']);
Route::get('/marcas',[ProductoController::class,'showBrand']);
Route::get('/carrito',[CarritoController::class,'show']);
Route::post('/carrito',[CarritoController::class,'insertProducto']);
Route::put('/carrito/{idUsuario}/{idProducto}',[CarritoController::class,'actualizarProducto']);
Route::delete('/carrito/vaciar/{idUsuario}',[CarritoController::class,'vaciarCarrito']);
Route::delete('/carrito/{idUsuario}/{idProducto}',[CarritoController::class,'eliminarProducto']);
Route::get('/wishlist',[WishlistController::class,'show']);
Route::post('/wishlist',[WishlistController::class,'insertProducto']);
Route::delete('/wishlist/{idUsuario}/{idProducto}',[WishlistController::class,'eliminarProducto']);
Route::get('/pedidos',[PagoController::class,'pedidos']);
Route::get('/user/{idUser}',[HomeController::class,'showUser']);
Route::get('/direcciones/{idUser}',[HomeController::class,'showDireccion']);


