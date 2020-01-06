<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('estados','StateController');
Route::resource('municipios','MunicipioController');
Route::resource('colonias','ColoniaController');
Route::resource('tipo_inmuebles','TipoInmuebleController');

Route::group(['prefix'=>'inmuebles'],function(){

    Route::get('/','InmuebleController@index');
    Route::get('/{inmueble_id}','InmuebleController@show');
    Route::get('/{inmueble_id}/edit','InmuebleController@edit');

    Route::get('/seccion-1/create','InmuebleController@seccion1Create');
    Route::get('/seccion-2/{inmueble_id}','InmuebleController@seccion2');
    Route::get('/seccion-3/{inmueble_id}','InmuebleController@seccion3');
    Route::get('/seccion-4/{inmueble_id}','InmuebleController@seccion4');

    Route::post('/seccion-1','InmuebleController@store1');
    Route::post('/seccion-2','InmuebleController@store2');
    Route::post('/seccion-3','InmuebleController@store3');
    Route::post('/seccion-4','InmuebleController@store4');

    Route::put('/{inmueble_id}','InmuebleController@update');

    Route::delete('/{inmueble_id}','InmuebleController@destroy');

});
