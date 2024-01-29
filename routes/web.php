<?php

use Illuminate\Support\Facades\Route;
use App\Http;
use App\Http\Controllers\HomeImagesController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\TuFundaController;

Route::get('/', [HomeImagesController::class, 'index'])->name('welcome');

Route::get('/catalogo', [HomeImagesController::class, 'catalogo'])->name('catalogo');

Route::get('/generica', [HomeImagesController::class, 'generica'])->name('generica');

// RUTAS DEL CATALOGO
Route::get('/catalogo', [CatalogueController::class, 'catalogo'])->name('catalogo');

Route::get('/tufunda', [TuFundaController::class, 'tufunda'])->name('tufunda');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
