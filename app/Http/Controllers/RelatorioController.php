<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function relatorio()
    {
        return view('site.relatorio');
    }
}
