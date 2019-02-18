<?php

Route::group(
    ['middleware' => ['jwt.auth','hr']], function(){
        Route::get('/', 'ClientController@index');
        Route::post('/', 'ClientController@store');
    }
);