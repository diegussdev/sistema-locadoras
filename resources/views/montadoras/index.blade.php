@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between">
    <h1>Modelos</h1>
    <div class="my-auto">
        <a href="{{route('montadora.create')}}" type="button" class="btn btn-primary btn-sm">Adicionar Montadora</a>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Modelos</th>
        <th scope="col" class="d-flex justify-content-end">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($montadoras as $montadora)            
        <tr>
          <td>{{ $montadora->id }}</td>
          <td>{{ $montadora->nome }}</td>
          <td>{{ $montadora->modelos->count() }}</td>
          <td class="d-flex justify-content-end gap-2">
            <a href="{{route('montadora.show', $montadora)}}" type="button" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{route('montadora.destroy', $montadora)}}" method="POST">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection