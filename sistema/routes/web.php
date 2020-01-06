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


Route::get('/','AuthController@formLogin')->name('/')->middleware('guest');

Route::group(['prefix'=>'auth'],function(){
    Route::post('login','AuthController@login');
    Route::post('logout','AuthController@logout');
});
Route::resource('inmuebles','InmuebleController')->middleware('auth');
Route::put('inmueble/cambiar-estatus/{inmueble_id}','InmuebleController@status')->middleware('auth');
Route::post('fotos/{inmueble_id}','FotoController@store')->middleware('auth');


Route::group(['prefix'=>'administrador','middleware'=>'auth'],function (){
    Route::get('/','HomeController@admin');
    Route::resource('estados','StateController');
    Route::resource('municipios','MunicipioController');
    Route::resource('colonias','ColoniaController');
    Route::resource('tipo_inmuebles','TipoInmuebleController');
    Route::resource('empleados','UserController');
});


