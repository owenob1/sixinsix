<?php

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/platform', array('as' => 'platform.pages.dashboard', function () {

    return view('platform.pages.dashboard');
}))->middleware('auth');

Route::get('/platform/userprofile/view', array('as' => 'platform.pages.userprofile.view', function () {
    return view('platform.pages.userprofile.view');
}))->middleware('auth');

Route::get('/platform/userprofile/edit', array('as' => 'platform.pages.userprofile.edit', function () {
    return view('platform.pages.userprofile.edit');
}))->middleware('auth');

Route::get('/platform/bugreport', array('as' => 'platform.pages.bugreport', function () {
    return view('platform.pages.bugreport');
}))->middleware('auth');

Auth::routes();
