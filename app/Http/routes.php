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

Route::get('inventario', 'InventarioController@add');
Route::get('inventario_lista', 'InventarioController@getAll');

Route::get('productos', 'ProductosController@getAll');
Route::get('agregar_producto', 'ProductosController@add');


Route::get('agregar_servicio', 'ServiciosController@add');
Route::get('servicios', 'ServiciosController@index');
Route::get('servicio/{id}', 'ServiciosController@getServicio');

Route::get('material/{id}', 'MaterialesController@getMaterial');

Route::get('constantes', 'ConstantesController@index');
Route::get('calculadora_precios', 'PreciosController@index');