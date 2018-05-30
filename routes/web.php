<?php

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/welcome', function () {
    return view('frontend.onboard');
});
Route::get('/design', function () {
    return view('development.partials.main');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/',      ['as' =>'admin.dashboard', 'uses'  =>'Admin\DashboardController@index']);
    Route::get('/users', ['as' =>'admin.users',     'uses'  =>'Admin\DashboardController@users']);
});



Route::group(['middleware' => 'web'], function () {

    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');


    Route::post('login', 'Auth\LoginController@login');

    Route::any('logout', 'Auth\LoginController@logout');

    Route::post('register', ['as' => 'user.doLogin', 'uses' => 'Auth\RegisterController@register']);

    Route::get('confirm/guest/{slug}/{id}', 'Auth\LoginController@confirmGuest')->name('confirmGuest');
});

//Route::get('/test',  ['as'=>'dashboard', 'uses' =>'HomeController@index']);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/platform/edit/profile', ['as'=>'platform.edit.profile', 'uses' =>'ProfileController@edit']);

    Route::post('platform/edit/profile/password',       ['as'=>'platform.edit.profile.password', 'uses' =>'ProfileController@password']);
    Route::post('platform/edit/profile/information',    ['as'=>'platform.edit.profile.information', 'uses' =>'ProfileController@information']);
    Route::post('platform/edit/profile/avatar',         ['as'=>'platform.edit.profile.avatar', 'uses' =>'ProfileController@avatar']);

    Route::get('/platform', array('as' => 'platform.pages.dashboard', function () {
        return view('platform.pages.dashboard');
    }))->middleware('auth');

    Route::get('/platform/userprofile/view', array('as' => 'platform.pages.userprofile.view', function () {
        return view('platform.pages.userprofile.view');
    }))->middleware('auth');

    Route::get('/platform/userprofile/edit', array('as' => 'platform.pages.userprofile.edit', function () {
        return view('platform.pages.userprofile.edit');
    }))->middleware('auth');

    Route::get('/platform/billing/invoices', 'SubscribeController@invoices')->middleware('auth');

    Route::get('/platform/billing/invoice/{invoice_id}', 'SubscribeController@invoice')->middleware('auth');

    Route::get('/platform/payment', 'SubscribeController@index')->middleware('auth');

    Route::post('/platform/payment', 'SubscribeController@proccessSubscription')->middleware('auth');



    Route::get('/platform/bugreport', array('as' => 'platform.pages.bugreport', function () {
        return view('platform.pages.bugreport');
    }))->middleware('auth');

    Route::get('/platform/terms', array('as' => 'platform.pages.terms', function () {
        return view('platform.pages.terms');
    }))->middleware('auth');
});



Auth::routes();

Route::resource('terms', 'TermsController');
