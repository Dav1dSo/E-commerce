<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produtos;

class HomeController extends Controller
{
    public function Home() 
    {
        $produtos = Produtos::all();

        return view("Home",  [
            'produtos' => $produtos
        ]);
    }
}
