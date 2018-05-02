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


Route::get('/', 'PagesController@index');

Route::get('/generic', 'PagesController@showGeneric');

Route::get('/elements', 'PagesController@showElements');


Route::get('forms.create', 'PostsController@index');

Route::post('forms.store', 'PostsController@store');


