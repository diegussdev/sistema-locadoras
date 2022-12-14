<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <meta name="csrf-token" content="{{ csrf_token() }}">
 
        <title>{{ config('app.name', 'Laravel') }}</title>
 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                    <a href="{{ route('home') }}" class="navbar-brand">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('montadora.*') ? 'active' : '' }}" aria-current="page" href="{{ route('montadora.index') }}">Montadoras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('modelo.*') ? 'active' : '' }}" aria-current="page" href="{{ route('modelo.index') }}">Modelos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('veiculo.*') ? 'active' : '' }}" aria-current="page" href="{{ route('veiculo.index') }}">Veiculos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('locadora.*') ? 'active' : '' }}" aria-current="page" href="{{ route('locadora.index') }}">Locadoras</a>
                            </li>
                            <li class="nav-item">

                                <li class="nav-item dropdown">
                                    <div class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Relat??rios
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a hr class="dropdown-item {{ Route::is('relatorio-locadoras-veiculos') ? 'active' : '' }}" aria-current="page" href="{{ route('relatorio-locadoras-veiculos') }}">Locadoras x Ve??culos</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item {{ Route::is('relatorio-log-veiculos') }}" href="{{ route('relatorio-log-veiculos') }}">Log Ve??culos</a>
                                        </li>
                                    </ul>
                                </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @if($message = Session::get('success'))
                <div class="container mt-2">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if($message = Session::get('fail'))
                <div class="container mt-2">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>