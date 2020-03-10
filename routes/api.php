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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'jurusans'], function(){
    Route::get('', 'JurusanController@index');
    Route::post('', 'JurusanController@create');
    Route::post('/{id}', 'JurusanController@update');
    Route::get('/{id}', 'JurusanController@delete');
    Route::get('/get/{id}', 'JurusanController@getJurusanById');
});

Route::group(['prefix'=>'mahasiswas'], function(){
    Route::get('', 'MahasiswaController@index');
    Route::post('', 'MahasiswaController@create');
    Route::post('/{nim}', 'MahasiswaController@update');
    Route::get('/{nim}', 'MahasiswaController@delete');
});