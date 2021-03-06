<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

/* Queue mails */
Route::get('/mail', 'MailController@index');

/*Customer Login*/
Route::get('/notification/mail', 'MailController@invoicepaid');

Route::get('/profile', 'ProfileController@index');

/*Vue JS*/
Route::get('/vue', 'VueController@index');

