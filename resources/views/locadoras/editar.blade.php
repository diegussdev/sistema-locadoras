@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between">
    <h1>Editar Locadora</h1>
</div>

<div class="mt-4">
    <form action={{route('locadora.update', $locadora)}} method="POST">
        @method('PUT')
        @include('locadoras._form')
        
        <div class="w-100 d-flex justify-content-end mt-4">
            <input type="hidden" name="id" value="{{ $locadora->id }}">
            <input type="submit" class="btn btn-success" name="store" value="Salvar">
        </div>
    </form>
</div>

@endsection
