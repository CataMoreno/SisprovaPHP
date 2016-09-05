<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});
Route::get('home', function()
{
	return View::make('home');
});
// -------------------------USUARIOS---------------------------
Route::get('usuarios', 'UsuarioController@mostrar');
Route::get('crearUsuarios', 'UsuarioController@formulario');
Route::post('guardar', 'UsuarioController@guardar');
 Route::get('eliminarusuario/{id}', 'UsuarioController@eliminar');
 Route::get('editarusuario/{id}', 'UsuarioController@obtener');
 Route::post('editarusuario/{id}', 'UsuarioController@actualizar');

//-----------------Equipo-------------------------------------//

Route::get('equipos', 'EquipoController@mostrar');
Route::post('equipos', 'EquipoController@guardar');

Route::get('crearequipos', 'EquipoController@formulario');
Route::get('eliminarequipos/{id}', 'EquipoController@eliminar');
Route::get('editarequipos/{id}', 'EquipoController@obtener');
Route::post('editarequipos/{id}', 'EquipoController@actualizar');

// //-----------------Tipo Equipo-------------------------------------//

// Route::get('equipos', 'EquipoController@mostrar');
// Route::post('equipos', 'EquipoController@guardar');

// Route::get('crearequipos', 'EquipoController@formulario');
// Route::get('eliminarequipos/{id}', 'EquipoController@eliminar');
// Route::get('editarequipos/{id}', 'EquipoController@obtener');
// Route::post('editarequipos/{id}', 'EquipoController@actualizar');
