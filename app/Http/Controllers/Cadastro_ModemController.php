<?php

namespace App\Http\Controllers;

use App\Models\CadastroModem;
use Illuminate\Http\Request;

class Cadastro_ModemController extends Controller
{
    public function cadastro(Request $request)
    {
        if (!(empty($request->all()))) {
            $player = new CadastroModem();
            $player->fill($request->all());
            $player->save();
        }
        return view('app.modem.cadastromodem');
    }
}
