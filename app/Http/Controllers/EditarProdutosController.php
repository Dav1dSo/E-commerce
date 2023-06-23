<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutosRequest;
use Illuminate\Support\Str;
use App\Models\Produtos;

class EditarProdutosController extends Controller
{
    public function EditarProdutos($id) {
        $produto = Produtos::find($id);
        return view('admin.EditarProdutos', ['produto' => $produto]);
    }

    public function UpdateProduto(ProdutosRequest $request, $id) {
        
        $produtos = Produtos::find($id);

        $inputValues =  $request->all(); 

        $inputValues['nomeId'] = Str::slug($inputValues['name']);

        if(!empty($inputValues['imagem']) && $inputValues['imagem']){ 
            $file = $inputValues['imagem'];
            $path = $file->store('produtos');
            $inputValues['imagem'] = $path; 
        }

        $produtos->update($inputValues);

        return Redirect('/produtosAdmin');
    }
}
