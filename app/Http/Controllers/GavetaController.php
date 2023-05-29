<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use App\Models\Gaveta;
use Illuminate\Http\Request;

class GavetaController extends Controller
{
    public function cadastrar(Camera $camera)
    {
        $camera = $camera->all();
        return view('Gavetas.create', [
            'cameras' => $camera
        ]);
    }

    public function gravar(Request $request, Gaveta $gaveta)
    {
        $gaveta_request = $request->all();

        $gaveta->create($gaveta_request);
        return redirect()->route('gavetas.listar');
    }

    public function listar(Request $request, Gaveta $gaveta)
    {
        $gavetas = $gaveta->all();
        return view('Gavetas.index', [
            'gavetas' => $gavetas,
        ]);
    }
}
