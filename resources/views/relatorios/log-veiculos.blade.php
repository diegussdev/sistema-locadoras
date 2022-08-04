@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between">
    <h1>Relatório: Log Veículos</h1>
</div>

<div class="my-3">
  @include('relatorios._filtro-log-veiculos')
</div>

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Placa</th>
        <th scope="col">Montadora / Modelo</th>
        <th scope="col">Locadora</th>
        <th scope="col">Início</th>
        <th scope="col">Fim</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($logs as $log)            
        <tr>
          <td>{{ $log->veiculo->placa }}</td>
          <td>{{ $log->veiculo->modelo->montadora->nome }} / {{ $log->veiculo->modelo->nome }}</td>
          <td>{{ $log->locadora->nome_fantasia }}</td>
          <td>{{ (new DateTime($log->data_inicio))->format('d/m/Y') }}</td>
          <td>{{ $log->data_fim ? (new DateTime($log->data_fim))->format('d/m/Y') : '' }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
   {{ $logs->appends($filtros)->links() }}
  </div>

@endsection