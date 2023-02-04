<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastro_LocalController extends Controller
{
    public function cadastro()
    {
        return view('app.local.cadastrolocal');
    }
}
