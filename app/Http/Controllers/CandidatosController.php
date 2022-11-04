<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Candidatos;

class CandidatosController extends Controller
{
    public function cadastroCandidatos()
    {
        return view('cadastrarCandidatos');
    }

    public function SalvarBancoCandidatos(Request $request)
    {
        $dadosCandidatos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'DataDeNascimento' => 'string|required',
            'telefone' => 'string|required',
        ]);
    }
}