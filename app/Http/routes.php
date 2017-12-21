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

 // Route::get('/', function () {
 //     return view('welcome');
 // });

 // Route::get('/ejemplo', 'ejemploController@index');

//Route::get('/inicio', 'ejemploController@inicio');

//Muestra formulario de registro
//Route::get('/registroUsuarios', 'ejemploController@registroUsuarios');

//Route::get('/ejemplo', 'usuariosController@ejemplo');

Route::get('/', 'principalController@index');

Route::get('/home', 'principalController@home');

Route::get('/registrarUsuario', 'principalController@registrarUsuario');

Route::post('/guardarUsuario', 'usuariosController@guardar');

Route::get('/consultarUsuarios', 'usuariosController@consultar');

Route::get('/eliminarUsuario/{id}', 'usuariosController@eliminar');

Route::get('/actualizarUsuario/{id}', 'usuariosController@actualizar');

Route::post('/actualizar/{id}', 'usuariosController@actualizarUsuario');

Route::get('/registrarProveedor', 'proveedoresController@registrar');

Route::post('/guardarProveedor', 'proveedoresController@guardar');

Route::get('/consultarProveedores', 'proveedoresController@consultar');

Route::get('/eliminarProveedor/{id}', 'proveedoresController@eliminar');

Route::get('/pdfUsuarios', 'usuariosController@pdfUsuarios');

Route::get('/asignarUsuarios/{idp}', 'proveedoresController@asignarUsuarios');

Route::post('/usuarioProyecto/{idp}', 'proyectosController@usuarioProyecto');

Route::get('/quitarUsuario/{id}', 'proyectosController@quitarUsuario');



Route::get('/registrarProducto', 'principalController@registrarProducto');

Route::post('/guardarProducto', 'productoController@guardar');

Route::get('/consultarProducto', 'productoController@consultar');

Route::get('/eliminarProducto/{id}', 'productoController@eliminar');

Route::get('/actualizarProducto/{id}', 'productoController@actualizar');

Route::post('/actualizarPro/{id}', 'productoController@actualizarProducto');





















