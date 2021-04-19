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

Route::get('/', 'NoticiaController@home')->name('home');

Route::get('/cadastrar', 'NoticiaController@create')->name('cadastrar');
Route::post('/cadastrar', 'NoticiaController@store')->name('salvar');
Route::get('/noticia/{id}', 'NoticiaController@show')->name('noticia');
Route::post('/noticias', 'NoticiaController@search')->name('pesquisar');
