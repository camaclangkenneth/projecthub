<?php

Route::group(
    ['middleware' => []], function(){
        Route::get('/', 'ProjectController@index');
        Route::post('/', 'ProjectController@store');
    }
);