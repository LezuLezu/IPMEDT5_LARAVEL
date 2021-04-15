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


Route::get('/humidity', '\App\Http\Controllers\HumidityController@showHum');
Route::get('/airpressure', 'App\Http\Controllers\AirpressureController@show');

//temperatuur routes
Route::get('/temperatuur', 'App\Http\Controllers\TemperatuurController@showTemp');
Route::get('/tempInfo', 'App\Http\Controllers\TemperatuurController@showTempInfo');

Route::get('/monoxide', 'App\Http\Controllers\MonoxideController@show');
Route::get('/monoxideInformation', 'App\Http\Controllers\MonoxideController@showMonoxideInformation');
Route::get('/buzzer', [BuzzerController::class, 'aanuit']);

Route::get('/', 'App\Http\Controllers\HomepageController@show');

// Stof routes

Route::get('/dust', '\App\Http\Controllers\DustController@index');
Route::get('/dust/show', '\App\Http\Controllers\DustController@show');
Route::get('/dust/avg', '\App\Http\Controllers\DustController@average');
Route::get('/dust/create', '\App\Http\Controllers\CleaningController@create');
Route::post('/dust/clean', '\App\Http\Controllers\CleaningController@store');
Route::get('/dust/clean', '\App\Http\Controllers\CleaningController@show');
