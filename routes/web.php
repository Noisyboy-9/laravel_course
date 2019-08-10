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

// simple static pages
Route::get('/', 'PagesController@welcome')->name('welcome');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/about', 'PagesController@about')->name('about');

//TODOS
Route::get('/todos' , 'TodosController@index')->name('todos.showAll');
Route::get('/todos/create' , 'TodosController@create')->name('todos.create');
Route::post('/todos/create' , 'TodosController@store')->name('todos.store');
Route::get('/todos/{todo}' , 'TodosController@show')->name('todos.showEach');
Route::delete('/todos/{todo}', 'TodosController@destroy')->name('todos.delete');
Route::patch('/todos/{todo}' , 'TodosController@update')->name('todos.update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
