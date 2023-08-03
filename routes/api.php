<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioDozeController;
use App\Http\Controllers\ExercicioOitoController;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioSeisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioTres;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioUmController;
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

Route::post('exercicio/dois', [ExercicioDoisController::class, 'Retornar']);

Route::post('exercicio/tres',[ExercicioTresController::class, 'Media']);

Route::post('exercicio/quatro',[ExercicioQuatroController::class, 'ParImpar']);

Route::post('exercicio/cinco',[ExercicioCincoController::class, 'Divisivel']);

Route::post('exercicio/seis',[ExercicioSeisController::class, 'Idade']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'Exibir']);

Route::post('exercicio/oito',[ExercicioOitoController::class, 'Tabuada']);

Route::post('exercicio/nove', [ExercicioSeteController::class, '']);

Route::get('exercicio/dez', [ExercicioSeteController::class, '']);

Route::post('exercicio/onze', [ExercicioSeteController::class, '']);

Route::get('exercicio/doze',[ExercicioDozeController::class, 'Decrescente']);