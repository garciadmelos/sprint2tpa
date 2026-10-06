<?php

namespace App\Http\Controllers;

use App\Models\Evento;

class EventoController extends Controller
{
    public function show(Evento $evento)
    {
        $perguntas = $evento->perguntas()
            ->with('user')
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('eventos.show', compact('evento', 'perguntas'));
    }
}