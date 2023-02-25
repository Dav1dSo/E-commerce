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

    public function UpdateProduto(Produtos $produtos, Request $request) {
        $input = $request->validate([
            'name' => 'string|required',
            'preco' => 'string|required',
            'estoque' => 'integer|nullable',
            'imagem' => 'file|nullable',
            'descricao' => 'string|nullable',
        ]);

        $input['nomeId'] = Str::slug($input['name']);

        if (!empty($input['imagem']) && $input['imagem']->isValid()) {
            $file = $input['imagem'];
            $path = $file->store('produtos');
            $input['imagem'] = $path;
        }

        $produtos->fill($input);
        $produtos->save();
        return Redirect::route('admin.produtos');
    }
}
