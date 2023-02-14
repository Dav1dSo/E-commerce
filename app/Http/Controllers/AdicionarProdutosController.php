<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdicionarProdutosController extends Controller
{
    public function AdicionarProduto() 
    {
        return view("admin.AdicionarProdutos");
    } 
}
