<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Redirect;
use App\Models\Produtos;

class EditarProdutosController extends Controller
{
    public function EditarProdutos() {
        $produtos = Produtos::all();
        return view('admin.EditarProdutos', ['produtos' => $produtos]);
    }

    public function UpdateProduto(Request $request, $id) {

        $inputValues =  $request->validate([
            'name' => 'string|required',
            'preco' => 'required',
            'imagem' => 'image|file',
            'estoque' => 'integer|required',  
            'descricao' => 'string|required'
        ]);

        $inputValues['nomeId'] = Str::slug($inputValues['name']);

        if(!empty($inputValues['imagem']) && $inputValues['imagem']){ 
            $file = $inputValues['imagem'];
            $path = $file->store('produtos');
            $inputValues['imagem'] = $path; 
        }

        $produtos = new Produtos;


        return Redirect('/produtosAdmin');
    }
}
