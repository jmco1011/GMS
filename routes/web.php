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


Route::get('/subjects','SubjectsController@index');
Route::get('/subjects/add','SubjectsController@create');
Route::post('/subjects/store','SubjectsController@store');

Route::get('/strands','StrandsController@index');
Route::post('/strands/add','StrandsController@add');
Route::post('/strands/store','StrandsController@store');

Route::get('/teachers','TeachersController@index');
Route::post('/teachers/add','TeachersController@add');
Route::post('/teachers/store','TeachersController@store');

Route::get('/sections','SectionsController@index');
Route::get('/sections/add','SectionsController@create');
Route::post('/sections/store','SectionsController@store');

Route::get('/subject-strands','SubjectStrandsController@index');
Route::post('/subject-strands/add','SubjectStrandsController@add');
Route::post('/subject-strands/store','SubjectStrandsController@store');