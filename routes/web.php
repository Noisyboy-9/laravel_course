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
Route::get('/todos' , 'TodosController@showList')->name('todos.showAll');
Route::get('/todos/add' , 'TodosController@add')->name('todos.add');
Route::get('/todos/show/{todo}' , 'TodosController@showEach')->name('todos.showEach');
Route::post('/todos/add' , 'TodosController@save');
Route::delete('/todos/delete/{todo}', 'TodosController@destroy')->name('todos.delete');
Route::patch('/todos/update/{todo}' , 'TodosController@update')->name('todos.update');
