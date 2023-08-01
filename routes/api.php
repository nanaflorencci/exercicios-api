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

Route::post('exercicio/quatro',[ExercicioQuatroController::class, 'ParImpar']);

Route::post('exercicio/cinco',[ExercicioCincoController::class, 'Divisivel']);

Route::post('exercicio/seis',[ExercicioSeisController::class, 'Idade']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'ExibirNumeros']);

Route::post('exercicio/oito',[ExercicioOitoController::class, 'Tabuada']);

Route::get('exercicio/nove', [ExercicioSeteController::class, '']);

Route::get('exercicio/dez', [ExercicioSeteController::class, '']);

Route::get('exercicio/onze', [ExercicioSeteController::class, '']);

Route::get('exercicio/doze',[ExercicioDozeController::class, 'Decrescente']);