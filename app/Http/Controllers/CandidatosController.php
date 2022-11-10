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

        Candidatos::create($dadosCandidatos);

        return Redirect::route('home');
    }

    public function MostrarEditarCandidatos(Request $request){
            
        $dadosCandidatos = Candidatos::query();
        $dadosCandidatos->when($request->marca,function($query, $v1){
            $query->where('marca','like','%'.$v1.'%');
        });

        $dadosCandidatos = $dadosCandidatos->get();
        
       return view('editarCandidatos',['registroCandidatos' => $dadosCandidatos]);
}

    public function AlterarBancoCandidatos(Candidatos $registroCandidatos, Request $request)
    {
        $banco = $request->validate([
            'nome => string|required',
            'email => string|required',
            'DataDeNascimento => string|required',
            'telefone => string|required'
            
        ]);

            $registroCandidatos->fill($banco);
            $registroCandidatos->save();

            return Redirect::route('/editarCandidatos');
    }
}