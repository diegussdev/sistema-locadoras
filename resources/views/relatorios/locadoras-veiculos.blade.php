@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between">
    <h1>Relatório: Locadoras X Veículos</h1>
</div>

<div class="my-3">
  @include('relatorios._filtro-locadoras-veiculos')
</div>

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Locadora</th>
        <th scope="col">Montadora / Modelo</th>
        <th scope="col">Placa</th>
        <th scope="col">Cadastro</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($veiculos as $veiculo)            
        <tr>
          <td>{{ $veiculo->locadora() ? $veiculo->locadora()->nome_fantasia : '' }}</td>
          <td>{{ $veiculo->modelo->montadora->nome }} / {{ $veiculo->modelo->nome }}</td>
          <td>{{ $veiculo->placa }}</td>
          <td>{{ $veiculo->created_at->format('d/m/Y') }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
   {{ $veiculos->appends($filtros)->links() }}
  </div>

@endsection