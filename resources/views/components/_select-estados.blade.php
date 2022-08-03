<div class="form-floating">
    <select class="form-select" id="estados_select" name="estado" aria-label="Estado" {{ isset($required) ? 'required' : ''  }}>
        <option value="">Selecione um estado</option>
        <option value="AC" {{ isset($selected) && $selected == 'AC' ? 'selected' : ''  }}>Acre</option>
        <option value="AL" {{ isset($selected) && $selected == 'AL' ? 'selected' : ''  }}>Alagoas</option>
        <option value="AP" {{ isset($selected) && $selected == 'AP' ? 'selected' : ''  }}>Amapá</option>
        <option value="AM" {{ isset($selected) && $selected == 'AM' ? 'selected' : ''  }}>Amazonas</option>
        <option value="BA" {{ isset($selected) && $selected == 'BA' ? 'selected' : ''  }}>Bahia</option>
        <option value="CE" {{ isset($selected) && $selected == 'CE' ? 'selected' : ''  }}>Ceará</option>
        <option value="DF" {{ isset($selected) && $selected == 'DF' ? 'selected' : ''  }}>Distrito Federal</option>
        <option value="ES" {{ isset($selected) && $selected == 'ES' ? 'selected' : ''  }}>Espírito Santo</option>
        <option value="GO" {{ isset($selected) && $selected == 'GO' ? 'selected' : ''  }}>Goiás</option>
        <option value="MA" {{ isset($selected) && $selected == 'MA' ? 'selected' : ''  }}>Maranhão</option>
        <option value="MT" {{ isset($selected) && $selected == 'MT' ? 'selected' : ''  }}>Mato Grosso</option>
        <option value="MS" {{ isset($selected) && $selected == 'MS' ? 'selected' : ''  }}>Mato Grosso do Sul</option>
        <option value="MG" {{ isset($selected) && $selected == 'MG' ? 'selected' : ''  }}>Minas Gerais</option>
        <option value="PA" {{ isset($selected) && $selected == 'PA' ? 'selected' : ''  }}>Pará</option>
        <option value="PB" {{ isset($selected) && $selected == 'PB' ? 'selected' : ''  }}>Paraíba</option>
        <option value="PR" {{ isset($selected) && $selected == 'PR' ? 'selected' : ''  }}>Paraná</option>
        <option value="PE" {{ isset($selected) && $selected == 'PE' ? 'selected' : ''  }}>Pernambuco</option>
        <option value="PI" {{ isset($selected) && $selected == 'PI' ? 'selected' : ''  }}>Piauí</option>
        <option value="RJ" {{ isset($selected) && $selected == 'RJ' ? 'selected' : ''  }}>Rio de Janeiro</option>
        <option value="RN" {{ isset($selected) && $selected == 'RN' ? 'selected' : ''  }}>Rio Grande do Norte</option>
        <option value="RS" {{ isset($selected) && $selected == 'RS' ? 'selected' : ''  }}>Rio Grande do Sul</option>
        <option value="RO" {{ isset($selected) && $selected == 'RO' ? 'selected' : ''  }}>Rondônia</option>
        <option value="RR" {{ isset($selected) && $selected == 'RR' ? 'selected' : ''  }}>Roraima</option>
        <option value="SC" {{ isset($selected) && $selected == 'SC' ? 'selected' : ''  }}>Santa Catarina</option>
        <option value="SP" {{ isset($selected) && $selected == 'SP' ? 'selected' : ''  }}>São Paulo</option>
        <option value="SE" {{ isset($selected) && $selected == 'SE' ? 'selected' : ''  }}>Sergipe</option>
        <option value="TO" {{ isset($selected) && $selected == 'TO' ? 'selected' : ''  }}>Tocantins</option>
    </select>
    <label for="estados_select">Montadora</label>
</div>