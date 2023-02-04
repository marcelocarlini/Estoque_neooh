<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    public function equipamento()
    {
        return view('app.equipamento.equipamento');
    }
}
