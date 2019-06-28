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
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/wel', 'WelcomeController@index');
Route::get('/contact', 'WelcomeController@contact');
Route::post('/rpost', 'WelcomeController@rpost');
Route::get('/rpost', 'WelcomeController@rget');

Route::resource('photos','ResourceController');
