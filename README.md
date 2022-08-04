# Tecnologias
- Laravel
- Bootstrap
- Docker

# Implementação
- CRUD de Locadoras
- CRUD de Montadoras
- CRUD de Modelos
- CRUD de Veículos
- Listagens paginadas
- Vínculo de Veículos com Locadora
- Relatório de Locadoras X Veículos
    - Filtros:
        -  Locadora
        -  Modelo
        -  Data do cadastro
- Relatório de Logs X Veículos
    - Filtros:
        -  Veículo

# Instruções
- Clone o repositório
- Acesse o diretório do projeto
- Execute `./vendor/bin/sail composer install`
- Inicie o docker e execute `./vendor/bin/sail up`
- Execute as migrations `./vendor/bin/sail artisan migrate`
- Acesse `localhost` pelo navegador

# Resultado

- Locadoras

![Locadoras](/storage/app/public/locadora.png "Locadoras")

- Montadoras

![Montadoras](/storage/app/public/montadora.png "Montadoras")

- Modelos

![Modelos](/storage/app/public/modelo.png "Modelos")

- Veículos

![Veículos](/storage/app/public/veiculo.png "Veículos")

- Relatório: Locadoras x Veículos

![Relatório: Locadoras x Veículos](/storage/app/public/relatorio-locadoras-veiculos.png "Relatório: Locadoras x Veículos")

- Relatório: Log Veículos

![Log Veículos](/storage/app/public/relatorio-log-veiculos.png "Log Veículos")