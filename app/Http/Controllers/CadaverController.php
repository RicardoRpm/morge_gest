<?php

namespace App\Http\Controllers;

use App\Models\Cadaver;
use App\Models\Gaveta;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

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

    public function levantar(Request $request, Cadaver $cadaver)
    {
        $cadaveres = $cadaver->all()->where('emGaveta', 'SIM');
        return view('Cadaveres.levantar', [
            'cadaveres' => $cadaveres,
        ]);
    }

    public function historico(Request $request, Cadaver $cadaver)
    {
        $cadaveres = $cadaver->all()->where('emGaveta', 'NAO');
        return view('Cadaveres.history', [
            'cadaveres' => $cadaveres,
        ]);
    }

    public function levantarById(string|int $id)
    {
        $cadaver = Cadaver::find($id);

        if ($cadaver != null) {
            $cadaver->emGaveta = "NAO";
            $cadaver->save();
            Session::put('msg', 'SIM');
            return redirect()->route('cadaveres.levantar');
        } else {
            Session::put('msg', 'NÃO');
            return redirect()->back();
        }
    }
}
