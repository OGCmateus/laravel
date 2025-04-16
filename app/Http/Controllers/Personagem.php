<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagens;

class Personagem extends Controller
{
    function view() {
        return view('cadastrar-personagem');
    }

    function salvarPersonagem(Request $dados){
        //crie o codigo para salvar no bd
        $personagem = new Personagens();
        $personagem->create($dados->all());
    }

    function listarPersonagem() {
        return view('listar-personagem');
    }
}
