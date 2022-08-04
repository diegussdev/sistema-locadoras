<form action="{{ route('relatorio-log-veiculos') }}">
    <div class="d-flex gap-2 align-items-center">
        @include('components._select-veiculos', ['selected' => isset($bVeiculo) ? $bVeiculo : null])

        <div class="d-flex align-items-center justify-content-center">
            <button class="btn btn-primary btn-lg">Filtrar</button>
        </div>
    </div>
</form>