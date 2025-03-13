<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PaginaInicioController extends Controller
{
    public function index()
    {
        // Aquí puedes pasar datos desde el backend al componente Vue
        return Inertia::render('Inicio', [
            'title' => 'Hola',
            'message' => 'Holaaaa',
        ]);
    }
}
