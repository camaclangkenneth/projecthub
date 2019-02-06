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

Route::group(['prefix' => 'clients', 'middleware' => 'hr.admin'], function () {
    Route::get('/', 'ClientController@showAllClients');
    Route::post('/', 'ClientController@store');
    Route::get('/{client}', 'ClientController@show');
    Route::put('/{client}', 'ClientController@update');
    Route::delete('/{client}', 'ClientController@delete');
});
