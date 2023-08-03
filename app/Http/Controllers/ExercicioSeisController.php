<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioSeisController extends Controller
{
    public function Idade(Request $request)
    {
        if ($request->numero <= 12) {
            return json_encode([
                'menssage' => '“O usuário é uma criança'
            ]);
        } else if ($request->numero <= 18) {
            return json_encode([
                'menssage' => "É um dolecente"
            ]);
        } else {
            return json_encode([
                'menssage' => '“É um adulto'
            ]);
        }
    }
    
}
