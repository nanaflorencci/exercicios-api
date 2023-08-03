<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function Media(Request $request)
    {
        $primeiroNumero = $request->primeiro_numero;
        $segundoNumero = $request->segundo_numero;
        $terceiroNumero = $request->terceiro_numero;

        return json_encode([
            'resultado' => (($primeiroNumero + $segundoNumero + $terceiroNumero) / 3)
        ]);
    }
}
