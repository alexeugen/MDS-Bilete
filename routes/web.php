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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');


Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/event/{id}','EventsController@displayEvent')->name('event');

Route::group(['middleware' => 'manager', 'prefix' => 'manager'], function () {
    Route::get('/dashboard', 'EventsController@dashboard')->name('manager.dashboard');
    Route::get('/add-event', 'EventsController@create')->name('create.event');
    Route::post('/add-event', 'EventsController@store')->name('add.event');
});

Route::get('/book/{id}', 'BookingController@store')->name('event.book');
