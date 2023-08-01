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

