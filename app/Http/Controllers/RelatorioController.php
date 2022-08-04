<?php

namespace App\Http\Controllers;

use App\Models\Locadora;
use App\Models\Log;
use App\Models\Modelo;
use App\Models\Veiculo;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatorioController
{
    /**
     * Página de relatório de Locadoras X Veículos
     */
    public function locadorasVeiculos(Request $request)
    {           
        $bLocadora = $request->input('locadora_id');
        $bModelo = $request->input('modelo_id');
        $bDataCadastro = DateTime::createFromFormat('d/m/Y', $request->input('data_cadastro'));
        
        $query = Veiculo::query();

        if ($bLocadora) {
            $query->join('logs', 'veiculos.id', '=', 'logs.veiculo_id')
                ->where('logs.locadora_id', '=', DB::raw($bLocadora))
                ->whereNull('logs.data_fim');
        }

        if ($bModelo) {
            $query->where('veiculos.modelo_id', '=', $bModelo);
        }

        if ($bDataCadastro) {
            $query->where('veiculos.created_at', '>=', $bDataCadastro);
            $bDataCadastro = $request->input('data_cadastro');
        }

        $veiculos = $query->select('veiculos.*')->distinct('veiculos.id')->paginate(10);
        $locadoras = Locadora::all();
        $modelos = Modelo::all();

        $filtros = $request->input();
        
        return view(
            'relatorios.locadoras-veiculos',
            compact(
                'veiculos',
                'locadoras',
                'modelos',
                'bLocadora',
                'bModelo',
                'bDataCadastro',
                'filtros'
            ));
    }

    /**
     * Página de relatório de Locadoras X Veículos
     */
    public function logVeiculos(Request $request)
    {   
        $bVeiculo = $request->input('veiculo_id');

        $query = Log::query();

        if ($bVeiculo) {
            $query->where('logs.veiculo_id', '=', $bVeiculo);
        }

        $logs = $query->orderBy('logs.veiculo_id')->orderBy('logs.data_fim')->paginate(10);
        $veiculos = Veiculo::all();

        $filtros = $request->input();

        return view(
            'relatorios.log-veiculos',
            compact(
                'logs',
                'veiculos',
                'bVeiculo',
                'filtros'
            ));
    }
}
