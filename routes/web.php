<?php

use Illuminate\Support\Facades\Route;

// importções de controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProdutosAdminController;
use App\Http\Controllers\AdicionarProdutosController;

// Rotas
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/produtos/{produtos:nomeId}', [ProdutosController::class, 'Produtos'])->name('produtos');
     
//admin
Route::get("/produtosAdmin", [ProdutosAdminController::class, 'Admin'])->name('admin.produtos');
Route::get("/adicionarProdutos", [AdicionarProdutosController::class, 'AdicionarProduto'])->name('adiociona.produto');
