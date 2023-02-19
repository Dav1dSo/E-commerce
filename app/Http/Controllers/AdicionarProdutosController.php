<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produtos;
use Illuminate\Support\Str;
use Redirect;

class AdicionarProdutosController extends Controller
{
    public function AdicionarProduto() 
    {
        return view("admin.AdicionarProdutos");
    } 

    public function Createproduto(Request $request) {

        $inputValues =  $request->validate([
            'name' => 'string|required',
            'preco' => 'integer|required',
            'imagem' => 'file|nullable',
            'estoque' => 'integer|required',  
            'descricao' => 'string|required'
        ]);
        $inputValues['nomeId'] = Str::slug($inputValues['name']);
        Produtos::create($inputValues);

        return Redirect('/adicionarProdutos');
    }
}
