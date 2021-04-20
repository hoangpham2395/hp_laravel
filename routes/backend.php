<?php

use Illuminate\Support\Facades\Route;

Route::name('backend.')->group(function () {
    Route::resource('admin', 'AdminController');
});
