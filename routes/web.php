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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/subscribe', ['as' => 'subscribe', 'uses' => 'SubscribeController@store']);
Route::get('/get-data', ['as' => 'get-data', 'uses' => 'MarketStateController@getData']);
