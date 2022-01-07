<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesoreController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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
    return view('menu.index');
});

Route::get('/mail', function () {

    Mail::to("akiles725@gmail.com")->send(new TestMail("Hololiwis"));

    return view('menu.index');
});

Route::resource('/profesores', ProfesoreController::class);
Route::resource('/alumnos', AlumnoController::class);
Route::resource('/cursos', CursoController::class);
Route::resource('/matriculas', MatriculaController::class);

