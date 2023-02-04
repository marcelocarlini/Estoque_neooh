<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicialController extends Controller
{
    public function paginainicial()
    {
        return view('site.inicial');
    }
}
