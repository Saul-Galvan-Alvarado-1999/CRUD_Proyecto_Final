<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\VendedoresController;
use  App\Http\Controllers\ClientesController;
use  App\Http\Controllers\DetallesController;
use  App\Http\Controllers\ProductosController;
use  App\Http\Controllers\PedidosController;


Route::get('/', function () {
    return view('auth.login');
});
/*
Route::get('/vendedores', 'VendedoresController@index');
Route::get('/vendedores/create', 'VendedoresController@create');*/
/* esto es para poner las rutas una por una
Route::get('/vendedores', [VendedoresController::class, 'index']);
Route::get('/vendedores/create', [VendedoresController::class, 'create']);
*/
//Este es mas facil ya que manda a traer todos en uno
Route::resource('vendedores', VendedoresController::class)->middleware('auth');//lo ultimo es para no tener acceso si no esta logueado
Route::resource('clientes', ClientesController::class)->middleware('auth');
Route::resource('detalles', DetallesController::class)->middleware('auth');
Route::resource('productos', ProductosController::class)->middleware('auth');
Route::resource('pedidos', PedidosController::class)->middleware('auth');

Auth::routes(['register=>false']);//desactivo la opción de registrar

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


