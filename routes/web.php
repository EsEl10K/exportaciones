<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetallePedidoController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // CRUD de detalle_pedido
    Route::resource('detalle-pedidos', App\Http\Controllers\DetallePedidoController::class);
    Route::resource('productos', App\Http\Controllers\ProductoController::class);
    Route::resource('empresa-mexicanas', App\Http\Controllers\EmpresaMexicanaController::class);
    Route::resource('empresa-extranjeras', App\Http\Controllers\EmpresaExtranjeraController::class);
    Route::resource('pedidos', App\Http\Controllers\PedidoController::class);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
