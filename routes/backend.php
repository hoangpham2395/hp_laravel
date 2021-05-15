<?php

use Illuminate\Support\Facades\Route;

Route::name('backend.')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    // Admin
    Route::post('admin/validStore', 'AdminController@validStore')->name('admin.validStore');
    Route::post('admin/validUpdate', 'AdminController@validUpdate')->name('admin.validUpdate');
    Route::get('admin/confirm', 'AdminController@confirm')->name('admin.confirm');
    Route::resource('admin', 'AdminController');
});
