<?php

namespace App\Http\Controllers;

use App\Models\CadastroPlayer;
use Illuminate\Http\Request;

class Cadastro_PlayerController extends Controller
{
    public function cadastro(Request $request)
    {
        if (!(empty($request->all()))) {
            $player = new CadastroPlayer();
            $player->fill($request->all());
            $player->save();
        }


        return view('app.player.cadastroplayer');
    }
}
