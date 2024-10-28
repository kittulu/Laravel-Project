<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\HomeController;

//Rota home
Route::get('/', [HomeController::class, 'index']);

// Rotas para Usuários
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
// Rotas para Financeiro
Route::get('/financeiro', [FinanceiroController::class, 'index']);
Route::post('/financeiro', [FinanceiroController::class, 'store']);
