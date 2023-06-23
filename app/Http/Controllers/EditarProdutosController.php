<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutosRequest;
use Illuminate\Support\Str;
use App\Models\Produtos;

class EditarProdutosController extends Controller
{
    public function EditarProdutos() {
        $produtos = Produtos::all();
        return view('admin.EditarProdutos', ['produtos' => $produtos]);
    }

    public function UpdateProduto(ProdutosRequest $request, $id) {
 

        $inputValues =  $request->all(); 

        $inputValues['nomeId'] = Str::slug($inputValues['name']);

        if(!empty($inputValues['imagem']) && $inputValues['imagem']){ 
            $file = $inputValues['imagem'];
            $path = $file->store('produtos');
            dd($file);
            $inputValues['imagem'] = $path; 
        }

        $produtos = new Produtos;


        return Redirect('/produtosAdmin');
    }
}
