<?php

use Illuminate\Support\Facades\Route;
use App\Http;
use App\Http\Controllers\HomeImagesController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\TuFundaController;
use App\Http\Controllers\CarritoController;


Route::get('/', [HomeImagesController::class, 'index'])->name('welcome');

Route::get('/catalogo', [HomeImagesController::class, 'catalogo'])->name('catalogo');

Route::get('/generica', [HomeImagesController::class, 'generica'])->name('generica');

// RUTAS DEL CATALOGO
Route::get('/catalogo', [CatalogueController::class, 'catalogo'])->name('catalogo');

Route::get('/tufunda', [TuFundaController::class, 'tufunda'])->name('tufunda');

Route::get('/obtener-marcas', [TuFundaController::class, 'obtenerMarcas']);

Route::get('/carrito', [CarritoController::class, 'carrito'])->name('carrito');

Route::get('/obtener-modelos/{marca}', [TuFundaController::class, 'obtenerModelos']);

Route::get('/obtener-imagen/{modelo}', [TuFundaController::class, 'obtenerImagen']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
