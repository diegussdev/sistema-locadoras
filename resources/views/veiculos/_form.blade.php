@csrf

<div class="mb-3">
    @include('components._select-modelos', ['required' => true, 'selected' => isset($veiculo) ? $veiculo->modelo->id : null])
</div>

<div class="form-floating mb-3">
    <input type="number" min="0" max="20" class="form-control" id="numero_portas" name="numero_portas" placeholder="Número de portas" value="{{ isset($veiculo) ? $veiculo->numero_portas : ''  }}" required>
    <label for="numero_portas">Número de portas</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor" value="{{ isset($veiculo) ? $veiculo->cor : ''  }}" required>
    <label for="cor">Cor</label>
</div>

<div class="form-floating mb-3">
    <input type="text" min="0" max="20" class="form-control" id="fabricante" name="fabricante" placeholder="Fabricante" value="{{ isset($veiculo) ? $veiculo->fabricante : ''  }}" required>
    <label for="fabricante">Fabricante</label>
</div>

<div class="form-floating mb-3">
    <input type="number" min="1000" max="9999" class="form-control" id="ano_fabricacao" name="ano_fabricacao" placeholder="Ano de Fabricação" value="{{ isset($veiculo) ? $veiculo->ano_fabricacao : ''  }}" required>
    <label for="ano_fabricacao">Ano de Fabricação</label>
</div>

<div class="form-floating mb-3">
    <input type="number" min="1000" max="9999" class="form-control" id="ano_modelo" name="ano_modelo" placeholder="Ano do Modelo" value="{{ isset($veiculo) ? $veiculo->ano_modelo : ''  }}" required>
    <label for="ano_modelo">Ano do Modelo</label>
</div>

<div class="form-floating mb-3">
    <input type="text" min="0" max="20" class="form-control" id="placa" name="placa" placeholder="Placa" value="{{ isset($veiculo) ? $veiculo->placa : ''  }}" required>
    <label for="placa">Placa</label>
</div>

<div class="form-floating mb-3">
    <input type="text" min="0" max="20" class="form-control" id="chassi" name="chassi" placeholder="Chassi" value="{{ isset($veiculo) ? $veiculo->chassi : ''  }}" required>
    <label for="chassi">Chassi</label>
</div>
