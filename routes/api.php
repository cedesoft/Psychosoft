<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout')->middleware('auth:sanctum');
});

Route::group(['prefix' => 'events', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', 'App\Http\Controllers\EventosApiController@index');
    Route::patch('update', 'App\Http\Controllers\EventosApiController@update');
    Route::get('{id}', 'App\Http\Controllers\EventosApiController@show');
    Route::delete('{id}', 'App\Http\Controllers\EventosApiController@destroy');
});

Route::group(['prefix' => 'patients', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', 'App\Http\Controllers\PatientController@index');
    Route::patch('update', 'App\Http\Controllers\PatientController@update');
    Route::get('{id}', 'App\Http\Controllers\PatientController@show');
    Route::delete('{id}', 'App\Http\Controllers\PatientController@destroy');

    Route::get('/expedient/{id}', 'App\Http\Controllers\ExpedientApiController@show');
    Route::patch('/expedient', 'App\Http\Controllers\ExpedientApiController@update');
});
