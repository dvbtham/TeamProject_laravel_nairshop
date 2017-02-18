<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('contact', function () {
    return view('pages.contact');
});
Route::get('about', function () {
    return view('pages.about');
});
Route::get('login', function () {
    return view('accounts.login');
});
Route::get('signup', function () {
    return view('accounts.signup');
});

Route::get('/myadmin', function ()    {
        return view('admin.pages.dashboard');
});
Route::get('brand/index',"BrandController@index");

Route::get('brand/create', "BrandController@getCreate");
Route::post('brand/create', "BrandController@postCreate");

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/myadmin', function ()    {
    //     return view('admin.pages.dashboard');
    // });

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
   
});
