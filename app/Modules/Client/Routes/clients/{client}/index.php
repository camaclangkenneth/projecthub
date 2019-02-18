<?php

Route::group(
    ['middleware' => ['jwt.auth','hr']], function(){
        Route::get('/', 'ClientController@show');
        Route::put('/', 'ClientController@update');
        Route::delete('/', 'ClientController@destroy');
    }
);