<div class="form-floating">
    <select class="form-select" id="locadoras_select" name="locadora_id" aria-label="Locadora" {{ isset($required) ? 'required' : ''  }}>
      <option value="">Selecione uma locadora</option>
      @foreach ($locadoras as $locadora)
        <option value="{{ $locadora->id }}" {{ isset($selected) && $selected == $locadora->id ? 'selected' : ''  }}>{{ $locadora->nome_fantasia }}</option>
      @endforeach
    </select>
    <label for="locadoras_select">Locadora</label>
</div>