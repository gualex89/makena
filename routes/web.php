<?php

use Illuminate\Support\Facades\Route;
use App\Http;
use App\Http\Controllers\HomeImagesController;


Route::get('/', [HomeImagesController::class, 'index'])->name('welcome');

Route::get('/tufunda', [HomeImagesController::class, 'tuFunda'])->name('diseña');

Route::get('/catalogo', [HomeImagesController::class, 'catalogo'])->name('catalogo');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
