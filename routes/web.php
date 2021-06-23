<?php
//AGREGAR LOS CONTROLLERS
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SituacionController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//EJEMPLOS
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');
//Route::get('/actividades', [App\Http\Controllers\HomeController::class, 'getuser'])->name('actividades');
//Route::get('/home', [HomeController::class, 'home']);
//FIN EJEMPLOS

//RUTAS DE EMPLEADOS
Route::get('/actividades', [HomeController::class, 'getuser'])->name('actividades');
Route::get('/situacion', [SituacionController::class, 'situacion'])->name('situacion');
Route::get('/asistencia', [AsistenciaController::class, 'asistencia'])->name('asistencia');


//RUTAS DE ADMINISTRADOR
Route::get('/inicio', [HomeController::class, 'inicio'])->name('inicio');
Route::get('/situaciones', [SituacionController::class, 'situaciones'])->name('situaciones');
Route::get('/asistencias', [AsistenciaController::class, 'asistencias'])->name('asistencias');
Route::get('/usuarios', [UserController::class, 'usuarios'])->name('usuarios');


