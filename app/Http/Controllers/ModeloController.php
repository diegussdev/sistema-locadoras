<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\Montadora;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ModeloController
{
    /**
     * Página inicial
     */
    public function index()
    {
        $modelos = Modelo::paginate(10);
        return view('modelos.index', compact('modelos'));
    }

    /**
     * Página de cadastro
     */
    public function create()
    {
        $montadoras = Montadora::all();
        return view('modelos.novo', compact('montadoras'));
    }

    /**
     * Página de alteração
     */
    public function show(Modelo $modelo)
    {
        $montadoras = Montadora::all();
        return view('modelos.editar', compact('modelo', 'montadoras'));
    }

    /**
     * Inserção
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $url = route('modelo.index');
        
        try {
            $dados = $request->all();
            Modelo::create($dados);
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao cadastrar modelo");        
        }

        return Redirect::to($url)->with('success', "Modelo cadastado com sucesso!");        
    }

    /**
     * Alteração
     * 
     * @param Request $request
     * @param Modelo $modelo
     * @return RedirectResponse
     */
    public function update(Request $request, Modelo $modelo)
    {
        $url = route('modelo.index');
        
        try {
            $dados = $request->all();
            $modelo->update($dados);
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao alterar modelo");        
        }

        return Redirect::to($url)->with('success', "Modelo alterado com sucesso!");  
    }

    /**
     * Exclusão
     * 
     * @param Modelo $modelo
     * @return RedirectResponse
     */
    public function destroy(Modelo $modelo)
    {
        $url = route('modelo.index');

        try {
            $modelo->delete();
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao deletar modelo");        
        }

        return Redirect::to($url)->with('success', "Modelo deletado com sucesso!");  
    }
}