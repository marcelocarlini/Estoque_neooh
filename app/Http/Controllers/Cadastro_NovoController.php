<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastro_NovoController extends Controller
{
    public function cadastronovo()
    {
        return view('site.cadastronovo');
    }
}
