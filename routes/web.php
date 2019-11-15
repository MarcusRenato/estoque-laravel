<?php

//use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
Route::get('/home', function () {    
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('product', 'ProductController');

Route::get('/user/logout', 'UserController@logout');