<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitioController;

/*
|--------------------------------------------------------------------------
| Rutas del sitio — Marquez CyberVanguard
| Dirección de Defensa Digital Proactiva
|--------------------------------------------------------------------------
*/

Route::get('/', [SitioController::class, 'inicio'])->name('inicio');

Route::get('/institucional', [SitioController::class, 'institucional'])->name('institucional');
Route::get('/organigrama', [SitioController::class, 'organigrama'])->name('organigrama');
Route::get('/mof', [SitioController::class, 'mof'])->name('mof');
Route::get('/mapro', [SitioController::class, 'mapro'])->name('mapro');

Route::get('/tramites', [SitioController::class, 'tramites'])->name('tramites');
Route::post('/tramites', [SitioController::class, 'tramitesEnviar'])->name('tramites.enviar');

Route::get('/contacto', [SitioController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [SitioController::class, 'contactoEnviar'])->name('contacto.enviar');

Route::get('/login', [SitioController::class, 'login'])->name('login');
Route::post('/login', [SitioController::class, 'loginIntentar'])->name('login.intentar');
