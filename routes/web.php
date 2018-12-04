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
    return view('home');
});

Route::get('success', function () {
    return view('registration.success');
})->name('success');

Route::get('announcement', 'AnnouncementController@fetch');
Route::get('about', 'AboutController@fetch');
Route::resource('registration', 'RegistrationController');
Route::get('result', 'ResultController@fetch');
