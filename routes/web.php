<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FallecidoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImagenController;


//rutas fallecidos
Route::get('/api/fallecidos', [FallecidoController::class, 'ultimos_fallecidos']);
Route::get('/api/fallecido_info/{id}', [FallecidoController::class, 'fallecido_info']);
Route::post('/api/fallecido/crear', [FallecidoController::class, 'crear_fallecido']);
Route::post('/api/fallecido/imagen_perfil/{id}', [FallecidoController::class, 'imagen_perfil']);
Route::get('/api/fallecidos/lista', [FallecidoController::class, 'lista']);
Route::get('/api/fallecidos/ubtenerUsuarioMain/{id}', [FallecidoController::class, 'obtenerUsuarioMain']);
Route::post('/api/fallecido/eliminar/{id}', [FallecidoController::class, 'delete']);
Route::post('/api/fallecido/actualizar/{id}', [FallecidoController::class, 'actualizar']);
Route::get('/api/fallecido/buscar/{apellido}', [FallecidoController::class, 'buscarNombre']);


//rutas usuarios
Route::get('/api/usuarios/lista', [UsuarioController::class, 'lista']);
Route::get('/api/usuarios/info/{id}', [UsuarioController::class, 'info']);
Route::post('/api/usuarios/actualizar/{id}', [UsuarioController::class, 'update']);
Route::post('/api/usuarios/eliminar/{id}', [UsuarioController::class, 'delete']);

//rutas imagenes
Route::post('/api/imagen/subir/{id}', [ImagenController::class, 'subir']);
Route::get('/api/imagen/ver/{id}', [ImagenController::class, 'ver']);

//pruebas
Route::post('/api/pruebas', [Controller::class, 'pruebas']);