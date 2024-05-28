<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function submitForm(Request $request)
    {
        // Recebendo os dados do formulário
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');
        $sexo = $request->input('sexo');
        $assunto = $request->input('assunto');


        // Retornando para a nova view com os dados do formulário
        return view('dados', compact('nome', 'telefone', 'endereco', 'sexo', 'assunto'));
    }
}
