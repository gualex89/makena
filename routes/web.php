<?php

use Illuminate\Support\Facades\Route;
use App\Http;
use App\Http\Controllers\HomeImagesController;
use App\Http\Controllers\CatalogueController;


Route::get('/', [HomeImagesController::class, 'index'])->name('welcome');

Route::get('/tufunda', [HomeImagesController::class, 'tuFunda'])->name('diseña');

Route::get('/catalogo', [HomeImagesController::class, 'catalogo'])->name('catalogo');

// RUTAS DEL CATALOGO
Route::get('/catalogo', [CatalogueController::class, 'catalogo'])->name('catalogo');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
