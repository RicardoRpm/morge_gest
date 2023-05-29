<?php

use App\Http\Controllers\CadaverController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\GavetaController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadaveres/cadastrar', [CadaverController::class, 'cadastrar'])->name('cadaveres.cadastrar');
Route::Post('/cadaveres/gravar', [CadaverController::class, 'gravar'])->name('cadaveres.gravar');
Route::get('/cadaveres/listar', [CadaverController::class, 'listar'])->name('cadaveres.listar');

Route::get('/gavetas/cadastrar', [GavetaController::class, 'cadastrar'])->name('gavetas.cadastrar');
Route::Post('/gavetas/gravar', [GavetaController::class, 'gravar'])->name('gavetas.gravar');
Route::get('/gavetas/listar', [GavetaController::class, 'listar'])->name('gavetas.listar');

Route::get('/cameras/cadastrar', function () {
    return view('cameras.create');
})->name('cameras.cadastrar');
Route::Post('/cameras/gravar', [CameraController::class, 'gravar'])->name('cameras.gravar');
Route::Get('/cameras/listar', [CameraController::class, 'listar'])->name('cameras.listar');
