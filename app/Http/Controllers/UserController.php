<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return view('index');
        } else {
            return view('users.login');
        }
    }

    public function gravar(Request $request)
    {
        $user = new User();
        $user->name = $request->nome;
        $user->email = $request->email;
        $user->password =  bcrypt($request->senha);

        $user->save();

        return redirect()->route('usuario.listar')->with('successs_msg', 'Usuário criado com sucesso');
    }

    public function logar(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Email ou senha incorreto'
        ]);
    }

    public function listar(Request $request, User $user)
    {
        $users = $user->all();
        return view('User.index', [
            'users' => $users,
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
