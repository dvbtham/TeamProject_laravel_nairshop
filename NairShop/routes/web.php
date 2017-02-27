<?php

Route::get('/', function () {
    return view('pages.home');
});
Route::get('contact', function () {
    return view('pages.contact');
});
Route::get('about', function () {
    return view('pages.about');
});
Route::get('login','LoginController@index');
Route::get('signup', function () {
    return view('accounts.signup');
});


Route::get('brand/index',"BrandController@index");

Route::get('brand/create', "BrandController@getCreate");
Route::post('brand/create', "BrandController@postCreate");
Route::get('myadmin/login', "LoginController@getLogin");

Auth::routes();
 Route::get('/home','HomeController@index');
//admin routes
Route::group(['prefix'=>'/myadmin','middleware'=>'auth'],function(){
   Route::get('/home','HomeController@index');
   Route::resource('users', 'UserController');
   Route::resource('cates', 'CateController');
   Route::resource('products', 'ProductController');
});





