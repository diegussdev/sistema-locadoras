<div class="form-floating">
    <select class="form-select" id="veiculos_select" name="veiculo_id" aria-label="Veículo" {{ isset($required) ? 'required' : ''  }}>
      <option value="">Selecione um veículo</option>
      @foreach ($veiculos as $veiculo)
        <option value="{{ $veiculo->id }}" {{ isset($selected) && $selected == $veiculo->id ? 'selected' : ''  }}>{{ $veiculo->placa }} - {{ $veiculo->modelo->montadora->nome }} / {{ $veiculo->modelo->nome }}</option>
      @endforeach
    </select>
    <label for="veiculos_select">Veículo</label>
</div>