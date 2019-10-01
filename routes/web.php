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
//Route::get('/usuarios/{id}','UsuarioController@inicio')->name('nombre');
//Route::post('/usuarios/create','UsuarioController@create');
Route::resource('usuarios','UsuarioController');
Route::resource('ubicacion','UbicacionController');