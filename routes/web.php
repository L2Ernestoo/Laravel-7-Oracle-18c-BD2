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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crear-multa','MultasController@index')->name('multa.index');
Route::get('/multas','MultasController@all')->name('multa.all');
Route::post('/store-multa','MultasController@store')->name('multa.store');
Route::delete('multa/{id}', 'MultasController@destroy')->name('multa.destroy');

Route::get('/consultar-multa','ConsultarController@index')->name('consulta.index');
Route::post('/consulta-multa','ConsultarController@show')->name('consulta.show');
