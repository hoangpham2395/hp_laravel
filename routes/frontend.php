<?php

use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home.index');
});
