<?php

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/welcome', function () {
    return view('frontend.onboard');
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

//PAYMENT//

Route::get('/platform/billing/invoices', 'SubscribeController@invoices')->middleware('auth');

Route::get('/platform/billing/invoice/{invoice_id}', 'SubscribeController@invoice')->middleware('auth');

Route::get('/platform/payment', 'SubscribeController@index')->middleware('auth');

<<<<<<< HEAD
Route::post('/platform/payment', 'SubscribeController@proccessSubscription')->middleware('auth');


=======
Route::get('/about', 'AboutController@index')->name('about-us');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('blog/{slug}','BlogController@item')->name('blogItem');
Route::get('/contact', 'ContactController@index')->name('contact-us');
Route::get('/faq', 'FaqController@index')->name('faqs');
Route::get('/portfolios', 'PortfolioController@index')->name('portfolios');
Route::get('/services', 'ServiceController@index')->name('services');
>>>>>>> parent of b418ef1... sdf

Route::get('/platform/bugreport', array('as' => 'platform.pages.bugreport', function () {
    return view('platform.pages.bugreport');
}))->middleware('auth');

Route::get('/platform/terms', array('as' => 'platform.pages.terms', function () {
    return view('platform.pages.terms');
}))->middleware('auth');

Auth::routes();

Route::resource('terms', 'TermsController');
