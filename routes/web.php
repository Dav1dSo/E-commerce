<?php

use Illuminate\Support\Facades\Route;

// importções de controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProdutosAdminController;
use App\Http\Controllers\AdicionarProdutosController;

// Rotas
Route::get('/', [HomeController::class, 'Home']);
Route::get('/produtos', [ProdutosController::class, 'Produtos']);

//admin
Route::get("/produtosAdmin", [ProdutosAdminController::class, 'Admin']);
Route::get("/adicionarProdutos", [AdicionarProdutosController::class, 'AdicionarProduto']);
