<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Login
Route::get('/', 'LoginController@index');
Route::get('create-acc', 'LoginController@newProfile');
Route::post('new', 'LoginController@create');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');
// Index
Route::get('index', 'AppController@inicio');
// Reportes
Route::get('/pdf/{report}', 'ReportsController@invoice');
// Configuraciones
Route::get('/config/sanciones', 'SanctionsController@sanctions');
Route::get('/config/reports' , 'SanctionsController@report');
Route::get('config/all', 'AppController@config');
Route::post('new-career', 'AppController@addCareer');
Route::get('del-career/{id}', 'AppController@deleteCareer');
Route::post('update/{id}', 'AppController@updateApp');
// Préstamos
Route::get('/loans', 'LoansController@index');
Route::get('/make', 'LoansController@makeLoan');
Route::get('/delivery', 'LoansController@delivery');
Route::get('select/{id}', 'LoansController@getArticles');
Route::post('Loan', 'LoansController@addLoan');
Route::get('viewloan/{id}', 'LoansController@viewLoan');

// User,Ariculos,Categorias
Route::resource('user','UserController');
Route::resource('article','ArticlesController');
Route::resource('category','CategoryController');