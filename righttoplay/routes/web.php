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

Route::get('/admin', 'FrontController@admin');

Route::resource('/user', 'UserController');

Route::resource('/local', 'LocalController');

Route::resource('/escola', 'EscolaController');
// Route::get('locais/{}', 'EscolaController@locais');
Route::resource('/professor','ProfessorController');