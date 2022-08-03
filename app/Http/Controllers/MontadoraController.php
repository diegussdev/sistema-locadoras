<?php

namespace App\Http\Controllers;

use App\Models\Montadora;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MontadoraController
{
    public function index()
    {
        $montadoras = Montadora::all();
        return view('montadoras.index', compact('montadoras'));
    }

    public function create()
    {
        return view('montadoras.novo');
    }

    public function show(Montadora $montadora)
    {
        return view(
            'montadoras.editar',
            [
                'method' => 'PUT',
                'montadora' => $montadora
            ]
        );
    }

    public function store(Request $request)
    {
        $url = route('montadora.index');
        
        try {
            $dados = $request->all();
            Montadora::create($dados);
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao cadastrar montadora");        
        }

        return Redirect::to($url)->with('success', "Montadora cadastada com sucesso!");        
    }

    public function update(Request $request, Montadora $montadora)
    {
        $url = route('montadora.index');
        
        try {
            $dados = $request->all();
            $montadora->update($dados);
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao alterar montadora");        
        }

        return Redirect::to($url)->with('success', "Montadora alterada com sucesso!");  
    }

    public function destroy(Montadora $montadora)
    {
        $url = route('montadora.index');

        try {
            $montadora->delete();
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao deletar montadora");        
        }

        return Redirect::to($url)->with('success', "Montadora deletada com sucesso!");  
    }
}