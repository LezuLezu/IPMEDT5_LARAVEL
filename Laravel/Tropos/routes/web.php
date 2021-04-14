<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuzzerController;

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

Route::get('/airpressure', 'App\Http\Controllers\AirpressureController@show');

Route::get('/temperatuur', 'App\Http\Controllers\TemperatuurController@showTemp');
Route::get('/tempInfo', 'App\Http\Controllers\TemperatuurController@showTempInfo');

Route::get('/monoxide', 'App\Http\Controllers\MonoxideController@show');
Route::get('/monoxideInformation', 'App\Http\Controllers\MonoxideController@showMonoxideInformation');
Route::get('/buzzer', [BuzzerController::class, 'aanuit']);

Route::get('/home', 'App\Http\Controllers\HomepageController@show');
Route::get('/dust', '\App\Http\Controllers\DustController@show');
Route::get('/dustavg', '\App\Http\Controllers\DustController@average');

