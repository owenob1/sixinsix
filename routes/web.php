<?php

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/platform', array('as' => 'platform.pages.dashboard', function () {

    return view('platform.pages.dashboard');
}))->middleware('auth');

Route::get('/platform/user_profile/edit', array('as' => 'platform.pages.user_profile.edit', function () {
    return view('platform.pages.user_profile.edit');
}))->middleware('auth');

Route::get('/platform/bugreport', array('as' => 'platform.pages.bugreport', function () {
    return view('platform.pages.bugreport');
}))->middleware('auth');

Auth::routes();
