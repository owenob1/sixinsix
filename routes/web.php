<?php

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/platform', function () {
    return view('platform.pages.dashboard');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
