<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//博客界面
Route::get('/', function () {
    return redirect('/blog');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');

//后台路由
Route::any('/test/login','admin\LoginController@login' );

// Route::any('/test/',function () {
//     return redirect('test/index');
// });

Route::any('/test','admin\IndexController@index' );
Route::any('/test/post','admin\IndexController@post' );
Route::any('/test/tag','admin\IndexController@tag' );

//后台路由
Route::get('admin', function () {
    return redirect('auth/login');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController');
    Route::get('admin/upload', 'UploadController@index');
});

//登陆状态
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');