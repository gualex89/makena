<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.base');
});





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
