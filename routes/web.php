<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();


Route::get('/','Frontend\PageController@home');

Route::get('admin/login','Auth\AdminLoginController@showLoginForm');
Route::post('admin/login','Auth\AdminLoginController@login')->name('admin.login');
Route::get('admin', function(){
    return 'admin page';
});
