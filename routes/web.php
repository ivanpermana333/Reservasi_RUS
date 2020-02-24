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

Route::get('/', function () {
    return view('frontend.utama');
});
Route::get('/tourvisit', function () {
    return view('frontend.tourvisit');
});
Route::get('/tournonton', function () {
    return view('frontend.tournonton');
});
Route::get('/seminar', function () {
    return view('frontend.seminar');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/admin', function () {
    return view('Admin.master');
});


Auth::routes();

Route::get('/create','BookingController@create');
Route::post('/store','BookingController@store');
Route::get('/table','BookingController@index');
Route::get('/kirim-email', 'EmailController@index');
Route::get('/terima/{booking}', 'BookingController@show');
Route::delete('/tolak/{booking}', 'BookingController@destroy');
// Route::get('/detail/{booking}', 'DetailController@show');
Route::get('/detail/{booking}', 'DetailController@store');

Route::get('/home', 'HomeController@index')->name('home');
