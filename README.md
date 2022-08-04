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
- Renomeio o arquivo `.env.example` para `.env`
- Garanta permissão ao diretório `chmod -R 777 ./`
- Execute `composer install --ignore-platform-reqs`
- Inicie o docker e execute `./vendor/bin/sail up`
- Execute as migrations `./vendor/bin/sail artisan migrate`
- Acesse `localhost` pelo navegador

# Resultado

- Locadoras

![Locadoras](/prints/locadora.png "Locadoras")

- Montadoras

![Montadoras](/prints/montadora.png "Montadoras")

- Modelos

![Modelos](/prints/modelo.png "Modelos")

- Veículos

![Veículos](/prints/veiculo.png "Veículos")

- Relatório: Locadoras x Veículos

![Relatório: Locadoras x Veículos](/prints/relatorio-locadoras-veiculos.png "Relatório: Locadoras x Veículos")

- Relatório: Log Veículos

![Log Veículos](/prints/relatorio-log-veiculos.png "Log Veículos")
