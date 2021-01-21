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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index','BeratController@index');
Route::get('/berat/add','BeratController@add_view');
Route::post('/berat/save','BeratController@add_process');
Route::get('/berat/edit/{id}','BeratController@edit_view');
Route::post('/berat/update','BeratController@update_process');

Route::get('/berat/show/{id}','BeratController@show_detail');
