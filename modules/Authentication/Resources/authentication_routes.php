<?php

$prefix = 'auth.';

// Authentication Routes...
Route::get('login', 'LoginController@showLoginForm')->name($prefix . 'login');
Route::post('login', 'LoginController@login')->name($prefix . 'login.post');
Route::post('logout', 'LoginController@logout')->name($prefix . 'logout');

// Registration Routes...
Route::get('register', 'RegisterController@showRegistrationForm')->name($prefix . 'register');
Route::post('register', 'RegisterController@register')->name($prefix . 'register.post');

// Password Reset Routes...
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name($prefix . 'password.request');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name($prefix . 'password.email');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name($prefix . 'password.reset');
Route::post('password/reset', 'ResetPasswordController@reset')->name($prefix . 'password.post');
