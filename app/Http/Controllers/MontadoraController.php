<?php

namespace App\Http\Controllers;

use App\Models\Montadora;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MontadoraController
{
    /**
     * Página inicial
     */
    public function index()
    {
        $montadoras = Montadora::paginate(10);
        return view('montadoras.index', compact('montadoras'));
    }

    /**
     * Página de cadastro
     */
    public function create()
    {
        return view('montadoras.novo');
    }

    /**
     * Página de alteração
     */
    public function show(Montadora $montadora)
    {
        return view('montadoras.editar', compact('montadora'));
    }

    /**
     * Inserção
     * 
     * @param Request $request
     * @return RedirectResponse
     */
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

    /**
     * Alteração
     * 
     * @param Request $request
     * @param Montadora $montadora
     * @return RedirectResponse
     */
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

    /**
     * Exclusão
     * 
     * @param Montadora $montadora
     * @return RedirectResponse
     */
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