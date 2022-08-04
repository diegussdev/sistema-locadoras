<form action="{{ route('relatorio-locadoras-veiculos') }}">
    <div class="d-flex gap-2 align-items-center">
        @include('components._select-locadoras', ['selected' => isset($bLocadora) ? $bLocadora : null])
        @include('components._select-modelos', ['selected' => isset($bModelo) ? $bModelo : null])
        
        <div class="form-floating">
            <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" placeholder="Data do Cadastro" value="{{ isset($bDataCadastro) ? $bDataCadastro : ''  }}">
            <label for="data_cadastro">Data do Cadastro</label>
        </div>

        <div class="d-flex align-items-center justify-content-center">
            <button class="btn btn-primary btn-lg">Filtrar</button>
        </div>
    </div>
</form>