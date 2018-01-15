<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return view('welcome');
});
Route::get('login', function () {
	return view('login');
});
//Route::get('qr', function () {
//	return view('qr');
//});
Route::get('auth/line', 'AuthController@redirectToProvider');
Route::get('auth/line/callback', 'AuthController@handleProviderCallback');
Route::get('qr', 'AuthController@handleProviderCallback');

Route::get('auth/facebook', 'AuthFBController@redirectToProviderFB');
Route::get('auth/facebook/callback', 'AuthFBController@handleProviderCallbackFB');
Route::get('qr', 'AuthFBController@handleProviderCallbackFB');

// Route::get('auth/twitter', 'AuthController@redirectToProviderTW');
// Route::get('auth/twitter/callback', 'AuthController@handleProviderCallbackTW');
// Route::get('qr', 'AuthController@handleProviderCallbackTW');

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
