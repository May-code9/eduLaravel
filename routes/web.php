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
Route::get('/icourse', ['as'=>'edu_icourse', 'uses'=>'EduController@icourse'])->middleware('login');
Route::get('/courses', ['as'=>'edu_courses', 'uses'=>'EduController@courses']);
Route::get('/contact', ['as'=>'edu_contact', 'uses'=>'EduController@contact']);
Route::get('/comingSoon', ['as'=>'coming_soon', 'uses'=>'EduController@coming']);

Route::group(['middleware' => 'admin'], function() {
    Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'DashboardController@index']);
    //Instructor
    Route::resource('instructor', 'InstructorController');
    Route::resource('trashedInstructor', 'InstructorTrashed');
    Route::get('/edit Instructor Image/{id}', ['as'=>'edit.instructor.image', 'uses'=>'EditImagesController@instructor']);
    Route::post('/edit Instructor Image/{id}', ['as'=>'edit.instructor.image', 'uses'=>'EditImagesController@post_instructor']);
    //School
    Route::resource('school', 'SchoolController');
    Route::resource('trashedSchool', 'SchoolTrashed');
    //Courses
    Route::resource('course', 'CourseController');
    Route::resource('trashedCourse', 'CourseTrashed');
});
