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

Route::get('/inicio', function () {
    return view('welcome');
});
//Auth::routes();
Route::get('/peliculas','MoviesController@lista');
Route::get('/pelicula/{id}','MoviesController@detalle');

Route::get('/agregaPelicula','MoviesController@mostrarFormulario');
Route::post('/agregarPelicula','MoviesController@agregarPelicula');

Route::get('/editaPelicula','MoviesController@editar');
Route::get('/editaPelicula', 'MovieController@actualizar')->name('editaPelicula');

Route::post('/editarPelicula','MoviesController@editarPelicula');
Route::post('/borrarPelicula','MoviesController@destroy');

Route::get('/actores','ActorsController@lista');
Route::get('/actor/{id}','ActorsController@detalle');
Route::get('/agregarActor', 'ActorsController@mostrar');
Route::post('/agregarActor', 'ActorsController@agregarActor');
