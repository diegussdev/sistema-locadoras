@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between">
    <h1>Veículos</h1>
    <div class="my-auto">
        <a href="{{route('veiculo.create')}}" type="button" class="btn btn-primary btn-sm">Adicionar Veículo</a>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Modelo</th>
        <th scope="col">Cor</th>
        <th scope="col">Ano do Modelo</th>
        <th scope="col">Ano de Fabricação</th>
        <th scope="col" class="d-flex justify-content-end">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($veiculos as $veiculo)            
        <tr>
          <td>{{ $veiculo->id }}</td>
          <td>{{ $veiculo->modelo->nome }}</td>
          <td>{{ $veiculo->cor }}</td>
          <td>{{ $veiculo->ano_modelo }}</td>
          <td>{{ $veiculo->ano_fabricacao }}</td>
          <td class="d-flex justify-content-end gap-2">
            <a href="{{route('veiculo.show', $veiculo)}}" type="button" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{route('veiculo.destroy', $veiculo)}}" method="POST">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
   {{ $veiculos->links() }}
  </div>

@endsection