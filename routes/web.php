<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PlanoController;

/**
 * Rota inicial do sistema
 * Ao acessar a raiz do site, redireciona para a listagem de planos
 */
Route::get('/', function () {
    return redirect()->route('planos.index');
});

/**
 * Grupo de rotas para gerenciamento de usuários
 */
Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index'); // Listagem de usuários
    Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios.create'); // Formulário de criação
    Route::post('/store', [UsuarioController::class, 'store'])->name('usuarios.store'); // Salvar novo usuário
    Route::get('/edit/{id}', [UsuarioController::class, 'edit'])->name('usuarios.edit'); // Formulário de edição
    Route::put('/update/{id}', [UsuarioController::class, 'update'])->name('usuarios.update'); // Atualizar usuário
    Route::delete('/destroy/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy'); // Excluir usuário
});

/**
 * Grupo de rotas para gerenciamento de planos
 */
Route::prefix('planos')->group(function () {
    Route::get('/', [PlanoController::class, 'index'])->name('planos.index'); // Listagem de planos
    Route::get('/create', [PlanoController::class, 'create'])->name('planos.create'); // Formulário de criação
    Route::post('/store', [PlanoController::class, 'store'])->name('planos.store'); // Salvar novo plano
    Route::get('/edit/{id}', [PlanoController::class, 'edit'])->name('planos.edit'); // Formulário de edição
    Route::put('/update/{id}', [PlanoController::class, 'update'])->name('planos.update'); // Atualizar plano
    Route::delete('/destroy/{id}', [PlanoController::class, 'destroy'])->name('planos.destroy'); // Excluir plano
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
