<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/home',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/cadastrarCandidatos',[CandidatosController::class,'cadastroCandidatos'])->name('cadastro-candidatos');
Route::post('/cadastrarCandidatos',[CandidatosController::class,'SalvarBancoCandidatos'])->name('salvar-banco-candidatos');
Route::put('/editarCandidatos',[CamisasController::class,'MostrarEditarCandidatos'])->name('mostrar-editar-candidatos');
Route::get('/login',[LoginController::class,'VerLogin'])->name('login');