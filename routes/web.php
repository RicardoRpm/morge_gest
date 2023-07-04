<?php

use App\Http\Controllers\CadaverController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\GavetaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadaveres/cadastrar', [CadaverController::class, 'cadastrar'])->name('cadaveres.cadastrar')->middleware('auth');
Route::Post('/cadaveres/gravar', [CadaverController::class, 'gravar'])->name('cadaveres.gravar');
Route::get('/cadaveres/historico', [CadaverController::class, 'historico'])->name('cadaveres.historico')->middleware('auth');
Route::get('/cadaveres/levantar', [CadaverController::class, 'levantar'])->name('cadaveres.levantar')->middleware('auth');
Route::get('/cadaveres/levantar/{id}', [CadaverController::class, 'levantarById'])->name('cadaveres.levantarById')->middleware('auth');

Route::get('/gavetas/cadastrar', [GavetaController::class, 'cadastrar'])->name('gavetas.cadastrar')->middleware('auth');
Route::Post('/gavetas/gravar', [GavetaController::class, 'gravar'])->name('gavetas.gravar');
Route::get('/gavetas/listar', [GavetaController::class, 'listar'])->name('gavetas.listar')->middleware('auth');

Route::get('/cameras/cadastrar', function () {
    return view('cameras.create');
})->name('cameras.cadastrar')->middleware('auth');

Route::Post('/cameras/gravar', [CameraController::class, 'gravar'])->name('cameras.gravar');
Route::Get('/cameras/listar', [CameraController::class, 'listar'])->name('cameras.listar')->middleware('auth');

Route::Post('/usuario/gravar', [UserController::class, 'gravar'])->name('usuario.gravar');
Route::Get('/usuario/listar', [UserController::class, 'listar'])->name('usuario.listar')->middleware('auth');
Route::Get('/usuario/logout', [UserController::class, 'logout'])->name('usuario.logout');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/usuario/cadastrar', function () {
    return view('User.create');
})->name('usuario.cadastrar')->middleware('auth');

Route::Post('/usuario/logar', [UserController::class, 'logar'])->name('usuario.logar');
