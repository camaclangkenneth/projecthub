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

Route::group(['prefix' => 'reports', 'middleware' => 'admin'], function(){
    Route::get('/', 'ReportController@showAllReports');
    Route::post('/', 'ReportController@store');
    Route::get('/{report}', 'ReportController@show');
    Route::put('/{report}', 'ReportController@update');
    Route::delete('/{report}', 'ReportController@delete');
});
