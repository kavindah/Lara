<?php


Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/{view}', 'Controller@pages');