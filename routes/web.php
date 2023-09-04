<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MaestroController;
use App\Models\Estudiante;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/create',[EstudianteController::class,'create'])->name('estudiantes.create');
Route::post('/estudiantes', [EstudianteController::class,'store'])->name('estudiantes.store');

Route::get('/maestros', [MaestroController::class, 'index'])->name('maestros.index');
Route::get('/maestros/create',[MaestroController::class,'create'])->name('maestros.create');
Route::post('/maestros', [MaestroController::class,'store'])->name('maestros.store');

Route::get('/maestros/edit/{maestro}',[MaestroController::class,'edit'])->name('maestros.edit');
Route::patch('/maestros/{maestro}', [MaestroController::class,'update'])->name('maestros.update');

Route::get('/estudiantes/edit/{estudiante}',[EstudianteController::class,'edit'])->name('estudiantes.edit');
Route::patch('/estudiantes/{estudiante}', [EstudianteController::class,'update'])->name('estudiantes.update');

Route::delete('/maestros/{maestro}', [MaestroController::class, 'delete'])->name('maestros.delete');

Route::delete('/estudiantes/{estudiante}', [EstudianteController::class, 'delete'])->name('estudiantes.delete');