<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function index(Request $request)
    {
        dd($request);
    }

    public function gravar(Request $request, Camera $camera)
    {
        //dd($request);

        /*
        $camera_dara = $request->only(
            'localizacao_camera',
            'descricao_area_camera',
            'data_instalacao',
            'data_ultima_manutencao',
            'estado_camera'
        );*/

        $camera_dara = $request->all();

        $camera->create($camera_dara);
        return redirect()->route('cameras.listar');
    }

    public function listar(Request $request, Camera $camera)
    {
        //return redirect()->route('cameras.listar', );
        return view('Cameras.index');
    }
}
