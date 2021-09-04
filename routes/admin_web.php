<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->namespace('Backend')->middleware('auth:admin_user')->group(function () {
    Route::get('/','PageController@home');
    });


