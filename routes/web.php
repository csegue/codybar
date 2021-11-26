<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;

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


Route::get('/', function () {return view('welcome');});

/*Clientes*/
/******************************************************************************************************************* */
Route::get('/clientes/listado', [ClienteController::class,'listado'])->name('clientes.listado');
Route::get('/clientes/edit/',    [ClienteController::class, 'edit'])->name('clientes.edit');


//Breeze: loguin y registro
//************************************************************************************************************
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';


//Spatie: Roles y permisos
//************************************************************************************************************
Route::get('/roles/listado',        [RolController::class, 'listado'])->name('roles.listado'); //listado roles
Route::get('/roles/{user}/editar',  [RolController::class, 'editar'])->name('roles.editar');                 //edit - Form
Route::put('roles/{user}',          [RolController::class, 'update'])->name('roles.update');     //edit   - A.Masiva

//error 404
//************************************************************************************************************
Route::get('errors', function(){abort('404');});

/*Contactar email */
/******************************************************************************************************************* */
Route::get('contactanos',  [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

/*Pruebas*/
/******************************************************************************************************************* */
Route::get('/plantilla', function(){ return view('plantillas.plantilla');});
Route::get('/enblanco', function(){return view('plantillas.enblanco');});
Route::get('/hola/{name}', function(string $name){ 
    return "Hola {$name}";
});








































