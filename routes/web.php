<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;

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

Route::get('/dashboard', [HomeController::class, 'index']);


//------------------------------- FACULTADES ------------------------------------------

Route::get('/facultades/listado', [Facultades::class, 'index']) ->name('listadoFac');

//Registro

Route::get('/facultades/registro', [Facultades::class, 'form_registro']);

Route::post('/facultades/registro', [Facultades::class, 'registrar']);

//Editar

Route::get('/facultades/editar/{id}', [Facultades::class, 'form_editar'])->name('editarFac_form');

Route::post('/facultades/editar/{id}', [Facultades::class, 'editar'])->name('editarFacultad');

//eliminar

Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar']) ->name('eliminarFac');


//------------------------------- PROGRAMAS ------------------------------------------

Route::get('/programas/listado', [Programas::class, 'index']) ->name('listadoPro');

//Registro

Route::get('/programas/registro', [Programas::class, 'form_registro']);

Route::post('/programas/registro',[Programas::class, 'registrar']);

//Editar

Route::get('/programas/editar/{id}', [Programas::class, 'form_editar'])->name('editarPro_form');

Route::post('/programas/editar/{id}', [Programas::class, 'editar'])->name('editarPrograma');

//eliminar

Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar']) ->name('eliminarPro');


//------------------------------- PROFESORES ------------------------------------------

Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listadoProf');

//Registro

Route::get('/profesores/registro', [Profesores::class, 'form_registro']);

Route::post('/profesores/registro',[Profesores::class, 'registrar']);

//Editar

Route::get('/profesores/editar/{id}', [Profesores::class, 'form_editar'])->name('editarProf_form');

Route::post('/profesores/editar/{id}', [Profesores::class, 'editar'])->name('editarProfesores');

//eliminar

Route::get('/profesores/eliminar/{id}', [Profesores::class, 'eliminar']) ->name('eliminarProf');


//---------------------------------------Estudiantes----------------------------------------

Route::get('/estudiantes/listado', [Estudiantes::class, 'index'])->name('listadoEst');

//Registro

Route::get('/estudiantes/registro', [Estudiantes::class, 'form_registro']);

Route::post('/estudiantes/registro',[Estudiantes::class, 'registrar']);

//Editar

Route::get('/estudiantes/editar/{id}', [Estudiantes::class, 'form_editar'])->name('editarEst_form');

Route::post('/estudiantes/editar/{id}', [Estudiantes::class, 'editar'])->name('editarEstudiantes');

//eliminar

Route::get('/estudiantes/eliminar/{id}', [Estudiantes::class, 'eliminar']) ->name('eliminarEst');


////////////////////////////////////////////////////////#######/////////////////////////////////////////////

Route::get('/regnotas/listado', [Calificaciones::class, 'index']);







