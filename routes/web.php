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
Route::resource('personal','PersonalController');
Route::resource('comidas','ComidaController');
Route::resource('eventos','EventoController');
Route::resource('clientes','ClienteController');
Route::resource('proveedores','ProveedorController');
Route::resource('nominas','NominaController');



Route::get('/home', 'HomeController@index')->name('home');
Route::post('auth/login', 'Auth\LoginController@authenticate')->name('authenticate');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/login', 'Auth\LoginController@login')->name('login');


//PDFs

Route::get('alimentos/pdf', 'ComidaController@pdf')->name('alimentos.pdf');
Route::get('personals/pdf', 'PersonalController@pdf')->name('personals.pdf');
Route::get('proveedor/pdf', 'ProveedorController@pdf')->name('proveedores.pdf');
Route::get('utileria/pdf', 'UtileriaController@pdf')->name('utilerias.pdf');
Route::get('nomina/{id}/pdf', 'NominaController@pdf')->name('nominas.pdf');


//Ajax

Route::get('/getinfo', 'NominaController@getinfo')->name('personal.getinfo');
