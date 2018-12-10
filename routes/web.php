<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//General Routes
Route::get('/', 'UsersController@index');
Route::get('login', function () {
    return view('login');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('/logout', 'LoginsController@logout');
Route::post('/login', 'LoginsController@login');
Route::get('/admin/feeds', 'FeedsController@feeds');
Route::get('/details/{title}/{id}', 'FeedsController@customerFeedDetails');
Route::post('/admin/save_feed', 'FeedsController@saveFeed')->middleware('auth');
Route::post('/rec_donation', 'UsersController@customerSave')->middleware('auth');
Route::post('/admin/edit_feed', 'FeedsController@editFeed')->middleware('auth');
Route::get('/admin/feed_details/{id}', 'FeedsController@feedDetails')->middleware('auth');
Route::get('/register', 'UsersController@register');
Route::get('/customer_register', 'UsersController@customerRegister');
Route::post('/save_donation', 'FeedsController@saveDonation');
Route::post('/send_message', 'FeedsController@sendMessage');

Route::post('/login', 'LoginsController@login');

Route::post('get_lgas', 'LocationsController@getLgas');
?>