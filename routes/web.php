<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

//visualizacion de pagina principal 
Route::get('/', function () {return view('pages/index');})->name('CFEControl');
Route::get('dashboard', function () {return view('admin/index');})->name('admin.index');
/////////////////////////////////////////////////

Route::get('admin', function () {return view('admin/index');})->name('admin');

//calendario
Route::get('calendario', function () {return view('admin/pages/calendario');})->name('calendario');

//Rutas de los controles
Route::resource('admin/administrador', AdministradorController::class);
Route::resource('admin/equipo', EquipoController::class);
Route::resource('admin/servicio', ServicioController::class);
Route::get('admin/servicio/{id}/modificarEquipo', [ServicioController::class, 'show'])->name('admin.servicio.modificar');
Route::get('admin/servicio/ver/{id}', [ServicioController::class, 'index'])->name('admin.servicio.ver');
Route::get('admin/servicio/destroy/{servicio}', [ServicioController::class, 'destroy'])->name('admin.servicio.destroy');
Route::put('admin/servicio/{servicio}', [ServicioController::class, 'update'])->name('admin.servicio.update');


//Equipo
Route::get('admin/nuevo', function () {   return view('admin/pages/nuevo'); })->name('admin.nuevo');
Route::get('/admin/equipos/nuevoEquipo', [EquipoController::class, 'nuevoEquipo'])->name('admin.equipo.nuevo');
Route::post('admin/create', [EquipoController::class, 'create'])->name('admin.create');
Route::get('admin/equipos/lista', [EquipoController::class, 'index'])->name('admin.equipo.lista');
Route::get('admin/destroy/{equipo}', [EquipoController::class, 'destroy'])->name('admin.destroy');
Route::post('admin/tours/clientetour', [ServicioController::class, 'create'])->name('admin.tours.clientetour');
Route::put('admin/equipo/{equipo}', [EquipoController::class, 'update'])->name('admin.equipo.update');
Route::get('admin/equipo/ver/{id}', [EquipoController::class, 'ver'])->name('admin.equipo.ver');

//pagina de inicio por default
//Route::get('/', function () {    return view('welcome');});


//pagina de inico de sesion
Auth::routes();
Route::get('admin', [HomeController::class, 'index'])->name('admin');
Route::get('aviso', function () { return view('pages/aviso');})->name('pages.aviso');
