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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/people', 'HomeController@people')->name('people');

Route::get('/person/{id}', 'HomeController@person')->name('person');

Route::post('/person/add_attributes', 'HomeController@personAttributes');

Route::get('/person/edit/{id}', 'HomeController@showEditPerson')->name('edit_person');

Route::post('/person/edit', 'HomeController@editPerson');

Route::get('/person/delete/{id}', 'HomeController@showDeletePerson')->name('delete_person');

Route::post('/person/purge', 'HomeController@purgePerson');

Route::get('/add/person', 'HomeController@showAddPerson')->name('add_person');

Route::post('/add/person', 'HomeController@addPerson');
