<?php

Route::group(
    ['middleware' => ['jwt.auth','admin']], function(){
        Route::get('/', 'ProjectController@show');
        Route::put('/', 'ProjectController@update');
        Route::delete('/', 'ProjectController@destroy');
    }
);