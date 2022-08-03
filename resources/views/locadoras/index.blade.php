@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between">
    <h1>Locadoras</h1>
    <div class="my-auto">
        <a href="{{route('locadora.create')}}" type="button" class="btn btn-primary btn-sm">Adicionar Locadora</a>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome Fantasia</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col" class="d-flex justify-content-end">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($locadoras as $locadora)            
        <tr>
          <td>{{ $locadora->id }}</td>
          <td>{{ $locadora->nome_fantasia }}</td>
          <td>{{ $locadora->email }}</td>
          <td>{{ $locadora->telefone }}</td>
          <td class="d-flex justify-content-end gap-2">
            <a href="{{route('locadora.show', $locadora)}}" type="button" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{route('locadora.destroy', $locadora)}}" method="POST">
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
   {{ $locadoras->links() }}
  </div>

@endsection