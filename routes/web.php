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

Route::get('/', function(){
    return view('welcome');
});


//用户认证的一系列路由：登录，注册，登出...
Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index');
//    Route::resource('point','system\PointController@index');
    Route::resource('category','CategoryController');

    Route::get('category/create', 'CategoryController@create');
    Route::get('category/delete/{id}', 'CategoryController@delete');

    Route::get('user/index','UserController@index');
    Route::get('user/userUpdate','UserController@userUpdate');
    Route::get('user/store','UserController@userStore');
    Route::get('user/logout','UserController@logout');
    Route::get('user/upload','UserController@upload');
    Route::get('user/category/index','UserCategoryController@index');
    Route::resource('user','UserController');
    Route::resource('point','PointController');
    Route::resource('order','OrderController');
    Route::post('order/generate','OrderController@generate');

});

////系统管理模块
//Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
//
//    //账号管理
//    Route::resource('account','AccountController');
//});



