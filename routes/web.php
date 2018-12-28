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
//Route::get('/', 'UsersController@index');
Route::get('/', function () {
    return view('home');
});

Route::get('/web-designer-lagos-nigeria', function () {
    return view('web-designer-lagos-nigeria');
});

Route::get('/web-application-developer-lagos-nigeria', function () {
    return view('web-application-developer-lagos-nigeria');
});


Route::get('/mobile-application-developer-lagos-nigeria', function () {
    return view('mobile-application-developer-lagos-nigeria');
});


Route::get('/internet-marketing-lagos-nigeria', function () {
    return view('internet-marketing-lagos-nigeria');
});


Route::post('/send_mail', 'UsersController@visitorSendMail');

?>