@csrf

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Nome fantasia" value="{{ isset($locadora) ? $locadora->nome_fantasia : ''  }}" required>
    <label for="nome_fantasia">Nome Fantasia</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social" value="{{ isset($locadora) ? $locadora->razao_social : ''  }}" required>
    <label for="razao_social">Razão Social</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="00.000.000/0001-00" value="{{ isset($locadora) ? $locadora->cnpj : ''  }}" required>
    <label for="cnpj">CNPJ</label>
</div>

<div class="form-floating mb-3">
    <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" value="{{ isset($locadora) ? $locadora->email : ''  }}" required>
    <label for="email">Email</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(00) 0 0000-0000" value="{{ isset($locadora) ? $locadora->telefone : ''  }}" required>
    <label for="telefone">Telefone</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000" value="{{ isset($locadora) ? $locadora->cep : ''  }}" required>
    <label for="cep">CEP</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua das flora, 123" value="{{ isset($locadora) ? $locadora->rua : ''  }}" required>
    <label for="rua">Rua</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="{{ isset($locadora) ? $locadora->cidade : ''  }}" required>
    <label for="cidade">Cidade</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{ isset($locadora) ? $locadora->bairro : ''  }}" required>
    <label for="bairro">Bairro</label>
</div>

@include('components._select-estados', ['selected' => isset($locadora) ? $locadora->estado : null])