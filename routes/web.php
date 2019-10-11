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

//Login
Route::get('/', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout','LoginController@logout');




Route::get('/welcome', function () {
    return view('welcome');
});

//Subject
Route::get('/subjects','SubjectsController@index');
Route::get('/subjects/add','SubjectsController@create');
Route::post('/subjects/store','SubjectsController@store');


//Strand
Route::get('/strands','StrandsController@index');
Route::get('/strands/add','StrandsController@create');
Route::post('/strands/store','StrandsController@store');

//Teacher
Route::get('/teachers','TeachersController@index');
Route::get('/teachers/add','TeachersController@create');
Route::post('/teachers/store','TeachersController@store');
Route::get('/teachers/edit','TeachersController@edit');

//Section
Route::get('/sections','SectionsController@index');
Route::get('/sections/add','SectionsController@create');
Route::post('/sections/store','SectionsController@store');

//Subject-Strand
Route::get('/SubjectStrands','SubjectStrandsController@index');
Route::post('/SubjectStrands/add','SubjectStrandsController@create');
Route::post('/SubjectStrands/store','SubjectStrandsController@store');

//Teacher-Load
Route::get('/teacher-loads','TeacherLoadsController@index');
Route::post('/teacher-loads/store','TeacherLoadsController@store');
Route::get('/teacher-loads/{teacher-load/update','TeacherLoadsController@update');	