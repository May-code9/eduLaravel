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
Route::get('/classroom', ['as'=>'edu_courses', 'uses'=>'PublicCourseController@classroom']);
Route::get('/courses/{id}', ['as'=>'edu_icourse', 'uses'=>'PublicCourseController@icourse'])->middleware('login');
Route::post('/takeCourse/{id}', ['as'=>'take.course', 'uses'=>'PublicCourseController@take_course'])->middleware('login');
Route::get('/courses/{id}/{weekNo}/{contentId}', ['as'=>'edu_icourse', 'uses'=>'PublicCourseController@courseContent'])->middleware('login');
Route::get('/bookshop', ['as'=>'edu_bookshop', 'uses'=>'PublicBookController@bookshop']);
Route::get('/contact', ['as'=>'edu_contact', 'uses'=>'EduController@contact']);
Route::get('/comingSoon', ['as'=>'coming_soon', 'uses'=>'EduController@coming']);

Route::group(['middleware' => 'admin'], function() {
    Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'DashboardController@index']);

    Route::get('/classboard', ['as'=>'admin.classroom', 'uses'=>'DashboardController@classroom']);

    Route::get('/bookboard', ['as'=>'admin.bookshop', 'uses'=>'DashboardController@bookshop']);

    /**
     * ClassBoard Category
     *
    */
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
    Route::get('/edit Course Image/{id}', ['as'=>'edit.course.image', 'uses'=>'EditImagesController@course']);
    Route::post('/edit Course Image/{id}', ['as'=>'edit.course.image', 'uses'=>'EditImagesController@post_course']);
    //Content
    Route::post('/contentSearch{page?}', ['as'=>'search.content', 'uses'=>'AdminSearchController@contentSearch']);
    Route::resource('content', 'ContentController');
    Route::resource('trashedContent', 'ContentTrashed');
    Route::get('/edit Content Image/{id}', ['as'=>'edit.content.image', 'uses'=>'EditImagesController@content']);
    Route::post('/edit Content Image/{id}', ['as'=>'edit.content.image', 'uses'=>'EditImagesController@post_content']);
    Route::get('/edit Content Video/{id}', ['as'=>'edit.content.video', 'uses'=>'EditVideoController@video']);
    Route::post('/edit Content Video/{id}', ['as'=>'edit.content.video', 'uses'=>'EditVideoController@post_video']);
    Route::get('/edit Content Pdf/{id}', ['as'=>'edit.content.pdf', 'uses'=>'EditPdfController@pdf']);
    Route::post('/edit Content Pdf/{id}', ['as'=>'edit.content.pdf', 'uses'=>'EditPdfController@post_pdf']);

    /**
     * BookBoard Category
     *
    */

    //Authors
    Route::resource('author', 'AuthorController');
    Route::resource('trashedAuthor', 'AuthorTrashed');
    Route::get('/edit Author Image/{id}', ['as'=>'edit.author.image', 'uses'=>'EditImagesController@author']);
    Route::post('/edit Author Image/{id}', ['as'=>'edit.author.image', 'uses'=>'EditImagesController@post_author']);

    //Book Category
    Route::resource('bookCategory', 'BookCategoryController');
    Route::resource('trashedBookCategory', 'BookCategoryTrashed');

    //Books
    Route::resource('book', 'BookController');
    Route::resource('trashedBook', 'BookTrashed');
    Route::get('/edit Book Image/{id}', ['as'=>'edit.book.image', 'uses'=>'EditImagesController@book']);
    Route::post('/edit Book Image/{id}', ['as'=>'edit.book.image', 'uses'=>'EditImagesController@post_book']);
    Route::get('/edit Book Pdf/{id}', ['as'=>'edit.book.pdf', 'uses'=>'EditPdfController@book']);
    Route::post('/edit Book Pdf/{id}', ['as'=>'edit.book.pdf', 'uses'=>'EditPdfController@post_book']);
});
