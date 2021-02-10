<?php

use Illuminate\Support\Facades\Route;

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
    return view('templates.main');
});

Route::group(['prefix' => 'usuarios'], function() {
    Route::get('/','UsuariosController@lista')->name('usuarios');
    Route::get('/incluir','UsuariosController@incluir')->name('usuarios.incluir');
    Route::put('/insert','UsuariosController@insert')->name('usuarios.insert');
    Route::get('/editar/{id}','UsuariosController@editar')->name('usuarios.editar');
    Route::put('/update/{id}','UsuariosController@update')->name('usuarios.update');
    Route::get('/delete/{id}','UsuariosController@delete')->name('usuarios.delete');
});