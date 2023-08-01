<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioSete extends Controller
{
    public function ExibirNumeros()
    {
        $numeros = [];

        for ($i = 1; $i <= 70; $i++) {
            array_push($numeros, $i);
        }

        return json_encode([
            'valores' => $numeros
        ]);
    }
}
