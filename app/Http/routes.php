<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('inventario', 'InventarioController@index');
Route::get('servicios', 'ServiciosController@index');
Route::get('constantes', 'ConstantesController@index');
Route::get('calculadora_precios', 'PreciosController@index');