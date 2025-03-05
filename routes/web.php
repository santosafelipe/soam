<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PlanoController;

// Rota da página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas para Gerenciamento de Usuários
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

// Rotas para Gerenciamento de Planos
Route::get('/planos', [PlanoController::class, 'index'])->name('planos.index');
Route::get('/planos/create', [PlanoController::class, 'create'])->name('planos.create');
Route::post('/planos', [PlanoController::class, 'store'])->name('planos.store');
Route::get('/planos/{id}', [PlanoController::class, 'show'])->name('planos.show');
Route::get('/planos/{id}/edit', [PlanoController::class, 'edit'])->name('planos.edit');
Route::put('/planos/{id}', [PlanoController::class, 'update'])->name('planos.update');
Route::delete('/planos/{id}', [PlanoController::class, 'destroy'])->name('planos.destroy');
