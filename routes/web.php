<?php

use App\Http\Controllers\ApkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeticionOrecionController;
use App\Http\Controllers\CuerpoIglesiaController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ProgramasRadialesController;
use App\Http\Controllers\GaleriaIglesiaController;

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

Route::get('/', function () {return view('general.home');})->name('/');
Route::get('/nosotros', function () {return view('general.congregacion');})->name('nosotros');
Route::get('/contacto', function () {return view('general.contacto');})->name('contacto');

// cuerpo de iglesia
Route::get('/varones',function() {return view('cuerposIglesia.varones');})->name('varones');
Route::get('/mujeres',function() {return view('cuerposIglesia.mujeres');})->name('mujeres');
Route::get('/jovenes',function() {return view('cuerposIglesia.jovenes');})->name('jovenes');
Route::get('/ninos',function() {return view('cuerposIglesia.ninos');})->name('ninos');
Route::get('/pastores',function() {return view('cuerposIglesia.pastores');})->name('pastores');
Route::get('/radio',function() {return view('cuerposIglesia.radio');})->name('radio');


// peticion de oracion
Route::get('/peticionOracion', [PeticionOrecionController::class, 'create'])->name('peticionOracion');
Route::post('/peticionOracion', [PeticionOrecionController::class, 'store'])->name('peticionOracion.store');
Route::get('/peticionOracion', [PeticionOrecionController::class, 'index'])->name('peticionOracion');
Route::get('/peticionOracionAdmin', [PeticionOrecionController::class, 'Admin'])->name('peticionOracionAdmin');
Route::delete('/admin/peticionOracionAdmin/{id}',[PeticionOrecionController::class, 'destroy'])->name('peticionOracionAdmin.destroy');


//eventos
Route::get('/eventos', [EventosController::class, 'index'])->name('eventos');
Route::get('/eventosAdmin', [EventosController::class, 'create'])->name('eventosAdmin');
Route::post('/eventosAdmin', [EventosController::class, 'store'])->name('eventosAdmin.store');
Route::get('/ver/{id}', [EventosController::class, 'show'])->name('ver');
Route::delete('/admin/verEventos/{id}',[EventosController::class, 'destroy'])->name('verEventos.destroy');

//programas radiales
Route::get('/programasRadiales', [ProgramasRadialesController::class, 'index'])->name('programasRadiales');
Route::get('/programasRadialesAdmin', [ProgramasRadialesController::class, 'create'])->name('programasRadialesAdmin');
Route::post('/programasRadialesAdmin', [ProgramasRadialesController::class, 'store'])->name('programasRadialesAdmin.store');
Route::delete('/admin/programasRadialesAdmin/{id}',[ProgramasRadialesController::class, 'destroy'])->name('programasRadialesAdmin.destroy');
//rutas privadas

// peticion de oracion
Route::get('/formPeticiones', [PeticionOrecionController::class, 'Admin'])->name('formPeticiones');


// GALERIA DE FOTOS
Route::get('/galeria',[GaleriaIglesiaController::class, 'index'])->name('galeria');
Route::get('/galeriaAdmin',[GaleriaIglesiaController::class, 'create'])->name('galeriaAdmin');
Route::post('/galeriaAdmin',[GaleriaIglesiaController::class, 'store'])->name('galeriaAdmin.store');

//acceder a todas las rutas del sistema

//radio
// Route::get('/reproducir-audio', 'AudioController@index');

//descarga
Route::resource('apk', ApkController::class);
Route::get('/carga', [ApkController::class,'carga'])->name('carga');
Route::post('/apk.store', [ApkController::class,'store'])->name('apk.store');
Route::get('/apks.descargar', [ApkController::class, 'mostrarDescargas'])->name('apks.mostrar_descargas');
Route::get('/apks/descargar/{id}', [ApkController::class,'descargar'])->name('apks.descargar');
Route::get('apks/{id}/ver',  [ApkController::class,'vista'])->name('apks.ver');




