<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'main');

Route::post('/send_message', 'MainController@send_message');

Route::post('/search', ['as' => 'posts', 'uses' => 'MainController@search']);

Route::get('/catalog', 'MainController@catalog');

Route::view('/info', 'info');

Route::post('/purchase', 'MainController@purchase');

Route::post('/order', ['as' => 'posts', 'uses' => 'MainController@order']);

Route::get('/admin', 'AdminpageController@admin');

Route::post('/admin', ['as' => 'posts', 'uses' => 'AdminpageController@admin_login']);

Route::post('/adminpagedel', 'AdminpageController@deleter');

Route::post('/adminpageget', 'AdminpageController@get');

Route::post('/adminpageupdate', 'AdminpageController@update');

Route::post('/adminpagegetname', 'AdminpageController@getname');

Route::post('/adminpagedeleteitem', 'AdminpageController@deleteitem');