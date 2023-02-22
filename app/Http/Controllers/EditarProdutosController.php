<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produtos;

class EditarProdutosController extends Controller
{
    public function EditarProdutos() {
        $produtos = Produtos::all();
        return view('admin.EditarProdutos', ['produtos' => $produtos]);
    }

    public function updateProduto(Produtos $produtos) {

    }
}
