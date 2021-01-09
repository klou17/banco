<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//ejemplo
Route::get('/nombre/{nombre}', function ($nombre) {
    return 'nombre es: '.$nombre;
});

//por defecto sale usuario 
Route::get('/usuario/{usuario?}', function ($usuario="usuario") {
    return 'usuario es: '.$usuario;
});

//nos lleva a otra ruta
Route::get('/ruta1', function () {
    return 'ruta 1';
})->name('rutaN1');

Route::get('/ruta2', function () {
    return redirect()->route('rutaN1');
});

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');
