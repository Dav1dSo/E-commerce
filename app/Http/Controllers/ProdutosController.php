<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{ 
    public function Produtos() 
    {
        return view('Produtos');
    }
}

