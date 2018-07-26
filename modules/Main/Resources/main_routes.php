<?php

$prefix = 'main.';

Route::get('/', function () {
    return view('main::welcome');
})->name($prefix . 'index');

Route::get('/home', 'HomeController@index')->name($prefix . 'home');
