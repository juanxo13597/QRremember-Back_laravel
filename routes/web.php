<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FallecidoController;


//rutas fallecidos
Route::get('/api/fallecidos', [FallecidoController::class, 'ultimos_fallecidos']);
Route::get('/api/fallecido_info/{id}', [FallecidoController::class, 'fallecido_info']);

//rutas usuarios
Route::get('/api/usuarios/lista', [UsuarioController::class, 'lista']);
Route::get('/api/usuarios/info/{id}', [UsuarioController::class, 'info']);