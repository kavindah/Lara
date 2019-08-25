<?php


Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/page', 'PageController@index')->name('page');
