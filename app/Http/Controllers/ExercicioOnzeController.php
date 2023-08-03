<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOnzeController extends Controller
{
    public function Equacoes(Request $request)
    {
        $primeira_entrada = $request -> primeiro_numero;
        $segunda_entrada = $request -> segundo_numero;

        return json_encode([
            'resultado' => ($primeira_entrada + $segunda_entrada)
        ]);
        return json_encode([
            'resultado' => ($primeira_entrada - $segunda_entrada)
        ]);
        return json_encode([
            'resultado' => ($primeira_entrada * $segunda_entrada)
        ]);
        return json_encode([
            'resultado' => ($primeira_entrada / $segunda_entrada)
        ]);
    }
}
