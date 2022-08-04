<div class="form-floating">
    <select class="form-select" id="montadoras_select" name="montadora_id" aria-label="Montadora" {{ isset($required) ? 'required' : ''  }}>
      <option value="">Selecione uma montadora</option>
      @foreach ($montadoras as $montadora)
        <option value="{{ $montadora->id }}" {{ isset($selected) && $selected == $montadora->id ? 'selected' : ''  }}>{{ $montadora->nome }}</option>
      @endforeach
    </select>
    <label for="montadoras_select">Montadora</label>
</div>