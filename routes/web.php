<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadaveres/cadastrar', function () {
    return view('Cadaveres.create');
})->name('cadaveres.cadastrar');

Route::get('/cadaveres/listar', function () {
    return view('Cadaveres.index');
})->name('cadaveres.listar');

Route::get('/cameras/cadastrar', function () {
    return view('cameras.create');
})->name('cameras.cadastrar');

Route::get('/cameras/listar', function () {
    return view('cameras.index');
})->name('cameras.listar');

Route::get('/gavetas/cadastrar', function () {
    return view('gavetas.create');
})->name('gavetas.cadastrar');

Route::get('/gavetas/listar', function () {
    return view('gavetas.index');
})->name('gavetas.listar');
