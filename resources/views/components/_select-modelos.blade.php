<div class="form-floating">
    <select class="form-select" id="modelos_select" name="modelo_id" aria-label="Modelo" {{ isset($required) ? 'required' : ''  }}>
      <option value="">Selecione um modelo</option>
      @foreach ($modelos as $modelo)
        <option value="{{ $modelo->id }}" {{ isset($selected) && $selected == $modelo->id ? 'selected' : ''  }}>{{ $modelo->nome }}</option>
      @endforeach
    </select>
    <label for="modelos_select">Montadora</label>
</div>