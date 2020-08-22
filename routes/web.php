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
Route::get('cursos','FormationProgramsController@index')->name('cursos.index');
Route::get('cursos/create','FormationProgramsController@create')->name('cursos.create');
Route::post('cursos/store','FormationProgramsController@store')->name('cursos.store');
Route::get('cursos/edit/{id}','FormationProgramsController@edit')->name('cursos.edit');
Route::put('cursos/update/{id}','FormationProgramsController@update')->name('cursos.update');
Route::delete('cursos/{id}','FormationProgramsController@delete')->name('cursos.delete');
