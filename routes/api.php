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

Route::middleware('hr')->post('register', 'APIRegisterController@register');
Route::post('login', 'APILoginController@login');
Route::post('logout', 'APILoginController@logout');

