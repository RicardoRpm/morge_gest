<?php

namespace App\Http\Controllers;

use App\Models\Gaveta;
use Illuminate\Http\Request;

class GavetaController extends Controller
{
    public function gravar(Request $request)
    {
        Gaveta::create($request);
        return redirect()->route('gaveta.listar');
    }
}
