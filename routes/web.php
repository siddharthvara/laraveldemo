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

Route::get('hello', function () {
    return "hello word";
});

// Route::get('Contact', function () {
//     return view('contact');
// });

Route::get('Contact', 'UserController@contact');
Route::get('Artical', 'UserController@getArtical');
Route::get('Artical/add', 'UserController@storeArtical');
Route::get('Artical/delete/{id}', 'UserController@deleteArtical');
Route::get('Artical/{id}', 'UserController@showArtical');
Route::post('Artical', 'UserController@setArtical');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
