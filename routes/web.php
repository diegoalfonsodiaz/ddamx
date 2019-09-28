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
    return view('admin.dashboard');
});


Route::get('/persona','PersonaController@index')->name('personas.index');
Route::get('/persona/create','PersonaController@create')->name('personas.create');
Route::post('/persona','PersonaController@store')->name('personas.store');
Route::get('/persona/{persona}', 'PersonaController@edit')->name('personas.edit');
Route::put('/persona/{persona}', 'PersonaController@update')->name('personas.update');
Route::post('/persona/{persona}', 'PersonaController@desactivar')->name('personas.desactivar');
Route::delete('/persona/{persona}', 'PersonaController@activar')->name('personas.activar');
