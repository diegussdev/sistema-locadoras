<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\Veiculo;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VeiculoController
{
    /**
     * Página inicial
     */
    public function index()
    {
        $veiculos = Veiculo::paginate(10);
        return view('veiculos.index', compact('veiculos'));
    }

    /**
     * Página de cadastro
     */
    public function create()
    {
        $modelos = Modelo::all();
        return view('veiculos.novo', compact('modelos'));
    }

    /**
     * Página de alteração
     */
    public function show(Veiculo $veiculo)
    {
        $modelos = Modelo::all();
        return view('veiculos.editar', compact('veiculo', 'modelos'));
    }

    /**
     * Inserção
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $url = route('veiculo.index');
        
        try {
            $dados = $request->all();
            Veiculo::create($dados);
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao cadastrar veículo");        
        }

        return Redirect::to($url)->with('success', "Veículo cadastado com sucesso!");        
    }

    /**
     * Alteração
     * 
     * @param Request $request
     * @param Veiculo $veiculo
     * @return RedirectResponse
     */
    public function update(Request $request, Veiculo $veiculo)
    {
        $url = route('veiculo.index');
        
        try {
            $dados = $request->all();
            $veiculo->update($dados);
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao alterar veículo");        
        }

        return Redirect::to($url)->with('success', "Veículo alterado com sucesso!");  
    }

    /**
     * Exclusão
     * 
     * @param Veiculo $veiculo
     * @return RedirectResponse
     */
    public function destroy(Veiculo $veiculo)
    {
        $url = route('veiculo.index');

        try {
            $veiculo->delete();
        } catch (Exception $e) {
            return Redirect::to($url)->with('fail', "Erro ao deletar veículo");        
        }

        return Redirect::to($url)->with('success', "Veículo deletado com sucesso!");  
    }
}