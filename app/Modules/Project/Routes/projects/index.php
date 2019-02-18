<?php

Route::group(
    ['middleware' => ['jwt.auth','admin']], function(){
        Route::get('/', 'ProjectController@index');
        Route::post('/', 'ProjectController@store');
    }
);