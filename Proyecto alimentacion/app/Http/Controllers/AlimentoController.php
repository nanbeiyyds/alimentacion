<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    public function show($alimento)
    {
        $data = config("alimentos.$alimento");

        // Si no existe el alimento
        abort_if(!$data, 404);

        // Crear menú dinámico
        $menu = collect($data['secciones'])->map(function ($i) {
            return [
                'id' => $i['id'],
                'texto' => $i['titulo']
            ];
        })->values();

        return view('alimentos.plantilla-alimentos', [
            'data' => $data,
            'alimento' => $alimento,
            'menu' => $menu
        ]);
    }
}
