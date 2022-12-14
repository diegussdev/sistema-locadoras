<?php

use App\Http\Controllers\LocadoraController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\MontadoraController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn() => view('home'))->name('home');

// Rotas de montadoras
Route::resource('/montadora', MontadoraController::class);

// Rotas de modelos
Route::resource('/modelo', ModeloController::class);

// Rotas de locadoras
Route::resource('/locadora', LocadoraController::class);

// Rotas de locadoras
Route::resource('/veiculo', VeiculoController::class);

// Rota de relatório locadorasxveículo
Route::get('/relatorio-locadoras-veiculos', [RelatorioController::class, 'locadorasVeiculos'])->name('relatorio-locadoras-veiculos');

// Rota de relatório locadorasxmodelos
Route::get('/relatorio-log-veiculos', [RelatorioController::class, 'logVeiculos'])->name('relatorio-log-veiculos');
