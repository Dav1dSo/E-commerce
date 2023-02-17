<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller
{ 
    public function Produtos(Produtos $produtos) 
    {
        return view('Produtos', [
            'produtos' => $produtos
        ]);
    }
}

