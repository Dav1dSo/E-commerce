<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosAdminController extends Controller
{
    
    public function Admin() {

        $produtos = Produtos::all();

        return view('admin.ProdutosAdmin', compact('produtos'));
    }
}
