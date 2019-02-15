<?php

Route::group(
    ['middleware' => []], function(){
        Route::get('/', 'TaskController@index');
        Route::post('/', 'TaskController@store');
    }
);