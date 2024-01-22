<?php

use Illuminate\Support\Facades\Route;
use App\Http;
use App\Http\Controllers\HomeImagesController;


Route::get('/', [HomeImagesController::class, 'index'])->name('welcome');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
