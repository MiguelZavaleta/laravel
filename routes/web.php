<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
Route::resource('central', 'TrailerController')->middleware('auth');//acceder de forma general al controlador
Route::resource('choferes', 'ChoferesController')->middleware('auth');//acceder de forma general al controlador
Route::resource('taller', 'TallerMecanicoController')->middleware('auth');//acceder de forma general al controlador
Route::resource('usuarios', 'UsuariosLogeadosController')->middleware('auth');//acceder de forma general al controlador


Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'UsuariosLogeadosController@index')->name('home');
