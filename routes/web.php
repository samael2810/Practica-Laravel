<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/proyectos', ProyectoController::class);
// Route::post('/proyectos', 'ProyectoController@store')->name('proyectos.store');
Route::post('/proyecto/store', [ProyectoController::class, 'store'])->name('proyectos.store');
Route::get('/proyecto/index', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::delete('/{Id}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');
Route::get('/{Id}', [ProyectoController::class, 'show'])->name('proyectos.show');
Route::get('/{Id}', [ProyectoController::class, 'edit'])->name('proyectos.edit');
Route::get('/{Id}', [ProyectoController::class, 'update'])->name('proyectos.update');


