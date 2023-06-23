<?php

use Illuminate\Support\Facades\Route;

// importações de controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProdutosAdminController;
use App\Http\Controllers\AdicionarProdutosController;
use App\Http\Controllers\EditarProdutosController;

// Rotas
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/produtos/{produtos:nomeId}', [ProdutosController::class, 'Produtos'])->name('produtos');

//admin
Route::get("/produtosAdmin", [ProdutosAdminController::class, 'Admin'])->name('admin.produtos'); // Adiciona produto
Route::get("/adicionarProdutos", [AdicionarProdutosController::class, 'AdicionarProduto'])->name('adiciona.produto');
Route::post("/adicionarProdutos/create", [AdicionarProdutosController::class, 'CreateProduto'])->name('adiciona.produto');
Route::any("/editarProdutos/{id}/edit", [EditarProdutosController::class, 'EditarProdutos'])->name('edita.produtos');// Edita produto
Route::put("/editarProdutos/{produto}", [EditarProdutosController::class, 'UpdateProduto'])->name('edita.produto');// Edita produto
Route::any('delete/{id}', [EditarProdutosController::class, 'delete'])->name('delete.produto');

