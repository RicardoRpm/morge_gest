<?php

namespace App\Http\Controllers;

use App\Models\Cadaver;
use App\Models\User;
use App\Models\Camera;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(User $user, Camera $camera, Cadaver $cadaver)
    {
        $consultas = Camera::select('cameras.descricao_area_camera', 'cameras.cor', DB::raw('COUNT(gavetas.id) as qtd_gaveta'))
            ->join('gavetas', 'gavetas.camera_id', '=', 'cameras.id')
            ->groupBy('cameras.descricao_area_camera', 'cameras.cor')
            ->get();

        $qtd_gavetasCameras = [];
        $qtd_descricaoCamera = [];
        $count = 0;
        foreach ($consultas as $consulta) {
            $qtd_gavetasCameras[$count] = $consulta->qtd_gaveta;
            $cor_corCamera[$count] =    $consulta->cor;
            $qtd_descricaoCamera[$count] = $consulta->descricao_area_camera;
            $count++;
        }

        $cor_corCamera_json = json_encode($cor_corCamera);
        $qtd_descricaoCamera_json = json_encode($qtd_descricaoCamera);

        //dd($qtd_descricaoCamera);
        //dd($cor_corCamera_json);

        return view('index', [
            'usuarios' => $user->count(),
            'cameras' => $camera->count(),
            'cadaveres' => $cadaver->count(),
            'qtd_gavetasCameras' => $qtd_gavetasCameras,
            'cor_corCamera' => $cor_corCamera_json,
            'qtd_descricaoCamera' => $qtd_descricaoCamera_json,
        ]);
    }
}
