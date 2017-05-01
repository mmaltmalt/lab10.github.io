<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::get('calculate', 'Api\TaxiController@index');
Route::get('calculate/{km}', 'Api\TaxiController@km');
Route::get('calculate/{km}/{m}', 'Api\TaxiController@km_minute');
Route::resource('/', 'Api\TaxiController');
