<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\bienvenidoController;



Route::get('/', function () {
    return view('welcome');
});

route::get('/bienvenido', [bienvenidoController::class, 'bienvenido']);

route::get('/alumnos', [AlumnoController::class, 'alumnos']);

route::get('/inicio', [bienvenidoController::class, 'inicio']);

    

