<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosAdminController extends Controller
{
    public function Admin() {
        return view('admin.ProdutosAdmin');
    }
}
