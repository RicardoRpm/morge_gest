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
        $camera_dara = $request->all();

        $camera->create($camera_dara);
        return redirect()->route('cameras.listar');
    }

    public function listar(Request $request, Camera $camera)
    {
        $cameras = $camera->all();
        return view('Cameras.index', [
            'cameras' => $cameras
        ]);
    }
}
