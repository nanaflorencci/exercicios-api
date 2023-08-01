<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', [ExercicioUmController::class, 'Multiplicar']);

Route::post('exercicio/dois', [ExercicioDoisController::class, 'RetornarMaior']);

Route::post('exercicio/tres',[ExercicioTresController::class, 'Media']);

Route::post('exercicio/quatro',[ExercicioQuatroController::class, 'Verificar']);

Route::post('exercicio/cinco',[ExercicioCincoController::class, 'verificacao']);

Route::post('exercicio/seis',[ExercicioSeisController::class, 'idade']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'exibirNumeros']);
