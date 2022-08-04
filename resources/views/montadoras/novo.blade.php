@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between">
    <h1>Adicionar Montadora</h1>
</div>

<div class="mt-4">
    <form action={{route('montadora.store')}} method="POST">
        @include('montadoras._form')
        
        <div class="w-100 d-flex justify-content-end mt-4">
            <input type="submit" class="btn btn-success" name="store" value="Salvar">
        </div>
    </form>
</div>

@endsection
