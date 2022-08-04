@csrf
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da montadora" value="{{ isset($montadora) ? $montadora->nome : ''  }}" required>
    <label for="nome">Nome</label>
</div>