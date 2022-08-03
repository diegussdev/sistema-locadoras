@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between">
    <h1>Modelos</h1>
    <div class="my-auto">
        <a href="{{route('modelo.create')}}" type="button" class="btn btn-primary btn-sm">Adicionar Modelo</a>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Montadora</th>
        <th scope="col" class="d-flex justify-content-end">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($modelos as $modelo)            
        <tr>
          <td>{{ $modelo->id }}</td>
          <td>{{ $modelo->nome }}</td>
          <td>{{ $modelo->montadora->nome }}</td>
          <td class="d-flex justify-content-end gap-2">
            <a href="{{route('modelo.show', $modelo)}}" type="button" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{route('modelo.destroy', $modelo)}}" method="POST">
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
   {{ $modelos->links() }}
  </div>

@endsection