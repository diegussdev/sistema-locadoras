<?php

namespace App\Http\Controllers;

use App\Models\Locadora;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LocadoraController
{
    /**
     * Página inicial
     */
    public function index()
    {
        $locadoras = Locadora::paginate(10);
        return view('locadoras.index', compact('locadoras'));
    }

    /**
     * Página de cadastro
     */
    public function create()
    {
        return view('locadoras.novo');
    }

    /**
     * Página de alteração
     */
    public function show(Locadora $locadora)
    {
        return view('locadoras.editar', compact('locadora'));
    }

    /**
     * Inserção
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $url = route('locadora.index');
        
        try {
            $dados = $request->all();
            Locadora::create($dados);
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao cadastrar locadora");        
        }

        return Redirect::to($url)->with('success', "Locadora cadastada com sucesso!");        
    }

    /**
     * Alteração
     * 
     * @param Request $request
     * @param Locadora $locadora
     * @return RedirectResponse
     */
    public function update(Request $request, Locadora $locadora)
    {
        $url = route('locadora.index');
        
        try {
            $dados = $request->all();
            $locadora->update($dados);
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao alterar locadora");        
        }

        return Redirect::to($url)->with('success', "Locadora alterada com sucesso!");  
    }

    /**
     * Exclusão
     * 
     * @param Locadora $locadora
     * @return RedirectResponse
     */
    public function destroy(Locadora $locadora)
    {
        $url = route('locadora.index');

        try {
            $locadora->delete();
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao deletar locadora");        
        }

        return Redirect::to($url)->with('success', "Locadora deletada com sucesso!");  
    }
}