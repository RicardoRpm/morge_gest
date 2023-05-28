<?php

namespace App\Http\Controllers;

use App\Models\Cadaver;
use App\Models\User;
use App\Models\Camera;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(User $user, Camera $camera, Cadaver $cadaver)
    {
        return view('index', [
            'usuarios' => $user->count(),
            'cameras' => $camera->count(),
            'cadaveres' => $cadaver->count(),
        ]);
    }
}
