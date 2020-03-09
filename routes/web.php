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
    return view('auth/login');
});


Route::resource('usuarios','WorkerController');
Route::resource('utilerias','UtileriaController');
Route::resource('personales','PersonalController');
Route::resource('comidas','ComidaController');
Route::resource('eventos','EventoController');
Route::resource('clientes','ClienteController');
Route::resource('proveedores','ProveedorController');



Route::get('/home', 'HomeController@index')->name('home');
Route::post('auth/login', 'Auth\LoginController@authenticate')->name('authenticate');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/login', 'Auth\LoginController@login')->name('login');

