<?php

use Illuminate\Support\Facades\Route;

Route::name('backend.')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('admin', 'AdminController');
});
