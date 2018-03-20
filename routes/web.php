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
Route::get('/icourse', ['as'=>'edu_icourse', 'uses'=>'EduController@icourse']);
Route::get('/courses', ['as'=>'edu_courses', 'uses'=>'EduController@courses']);
Route::get('/contact', ['as'=>'edu_contact', 'uses'=>'EduController@contact']);
Route::get('/comingSoon', ['as'=>'coming_soon', 'uses'=>'EduController@coming']);

Route::group(['middleware' => 'admin'], function() {
    Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'DashboardController@index']);
});
