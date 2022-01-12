<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesoreController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('menu.index');
});



Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/imprimir', 'App\Http\Controllers\ProfesoreController@imprimir')->name('pdf.pdf');
Route::get('/imprimiralumno', 'App\Http\Controllers\AlumnoController@imprimir')->name('pdf.pdf');



Route::get('enviar', [PDFController::class, 'index']);
Route::resource('/profesores', ProfesoreController::class);
Route::resource('/alumnos', AlumnoController::class);
Route::resource('/cursos', CursoController::class);
Route::resource('/matriculas', MatriculaController::class);
