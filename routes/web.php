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

Route::get('/', ['as'=>'edu_home', 'uses'=>'EduController@index']);
Route::get('/about', ['as'=>'edu_about', 'uses'=>'EduController@about']);
Route::get('/iSchool', ['as'=>'edu_iSchool', 'uses'=>'EduController@iSchool']);
Route::get('/classroom', ['as'=>'edu_classroom', 'uses'=>'EduController@classroom']);
Route::get('/contact', ['as'=>'edu_contact', 'uses'=>'EduController@contact']);
Route::get('/comingSoon', ['as'=>'coming_soon', 'uses'=>'EduController@coming']);
