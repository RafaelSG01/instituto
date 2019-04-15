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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

	// Eventos
	Route::get('/events', 'EventController@list')->name('event.list');
	Route::get('/event/{id}/destroy', 'EventController@destroy')->name('event.destroy');
	Route::get('/event/{id}/status', 'EventController@status')->name('event.status');
	// View (Create/Update)
	Route::get('/event/create', 'EventController@create')->name('event.create');
	Route::get('/event/{slug}/edit', 'EventController@edit')->name('event.edit');
	// Store (Create/Update)
	Route::post('/event/store', 'EventController@store')->name('event.store');
	Route::post('/event/update', 'EventController@update')->name('event.update');
	// Manager
	Route::get('/event/{slug}', 'EventController@manager')->name('event.manager');
	// Palestra
	Route::get('/event/{slug}/program/create', 'ProgramController@create')->name('program.create');
	Route::post('/event/program/store', 'ProgramController@store')->name('program.store');
	Route::get('/event/program/{id}/edit', 'ProgramController@edit')->name('program.edit');
	Route::post('/event/program/update', 'ProgramController@update')->name('program.update');
	Route::get('/event/program/{id}/destroy', 'ProgramController@destroy')->name('program.destroy');
	// Publicação
	Route::get('/event/{slug}/publication/create', 'PublicationController@create')->name('publication.create');
	Route::post('/event/publication/store', 'PublicationController@store')->name('publication.store');
	Route::get('/event/publication/{id}/edit', 'PublicationController@edit')->name('publication.edit');
	Route::post('/event/publication/update', 'PublicationController@update')->name('publication.update');
	Route::get('/event/publication/{id}/destroy', 'PublicationController@destroy')->name('publication.destroy');

});