<?php

use Illuminate\Support\Facades\Auth;
Route::get('/home', function () {
    if (Auth::check()) {
        return view('home');
    }
    return redirect()->route('login');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('product', 'ProductController');

Route::get('/user/logout', 'UserController@logout');