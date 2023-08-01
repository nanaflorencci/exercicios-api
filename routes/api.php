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

Route::post('exercicio/um', [ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', [ExercicioDoisController::class, 'retornar']);

Route::post('exercicio/tres',[ExercicioTresController::class, 'media']);

Route::post('exercicio/quatro',[ExercicioQuatroController::class, 'parimpar']);

Route::post('exercicio/cinco',[ExercicioCincoController::class, 'divisivel']);

Route::post('exercicio/seis',[ExercicioSeisController::class, 'idade']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'exibir']);

Route::post('exercicio/oito',[ExercicioOitoController::class, 'Tabuada']);

Route::get('exercicio/nove', [ExercicioSeteController::class, '']);

Route::get('exercicio/dez', [ExercicioSeteController::class, '']);

