@csrf

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do modelo" value="{{ isset($modelo) ? $modelo->nome : ''  }}" required>
    <label for="nome">Nome</label>
</div>

@include('components._select-montadoras', ['required' => true, 'selected' => isset($modelo) ? $modelo->montadora->id : null])
