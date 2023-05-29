<?php

namespace App\Http\Controllers;

use App\Models\Cadaver;
use App\Models\Gaveta;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CadaverController extends Controller
{
    public function cadastrar(Gaveta $gaveta)
    {
        $gavetas = $gaveta->where('disponibilidade_gaveta', '=', 'Livre');
        return view('Cadaveres.create', [
            'gavetas' => $gavetas
        ]);
    }

    public function gravar(Request $request, Cadaver $cadaver)
    {
        $cadaver_request = $request->all();
        $htmlDatetimeLocal = $cadaver_request['data_hora_obito'];
        $htmlDatetimeLocal .= ':00';

        $cadaver_request['data_hora_obito'] = Carbon::createFromFormat('Y-m-d\TH:i:s', $htmlDatetimeLocal);

        $cadaver->create($cadaver_request);
        return redirect()->route('gavetas.listar');
    }

    public function listar(Request $request, Cadaver $cadaver)
    {
        $cadaveres = $cadaver->all();
        return view('Cadaveres.index', [
            'cadaveres' => $cadaveres,
        ]);
    }
}
