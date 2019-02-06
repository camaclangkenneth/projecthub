<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'projects', 'middleware' => 'admin'], function(){
    Route::get('/', 'ProjectController@showAllProjects');
    Route::post('/', 'ProjectController@store');
    Route::get('/{project}', 'ProjectController@show');
    Route::put('/{project}', 'ProjectController@update');
    Route::delete('/{project}', 'ProjectController@delete');
});