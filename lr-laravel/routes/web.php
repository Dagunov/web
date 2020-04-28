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

Route::get('/laravel', 'MainController@laravel');

Route::get('/items/{id?}', 'MainController@getobj');

Route::get('/list', 'MainController@items');

Route::get('/', 'MainController@index');

Route::post('/item', ['as' => 'posts', 'uses' => 'MainController@getbyid']);

Route::post('/price-search', ['as' => 'posts', 'uses' => 'MainController@findbyprice']);