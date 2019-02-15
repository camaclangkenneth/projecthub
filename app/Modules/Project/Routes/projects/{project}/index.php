<?php

Route::group(
    ['middleware' => []], function(){
        Route::get('/', 'ProjectController@show');
        Route::put('/', 'ProjectController@update');
        Route::delete('/', 'ProjectController@destroy');
    }
);