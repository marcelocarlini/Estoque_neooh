<!doctype html>
<html lang="en">
{{-- Versão 1.0.0.1 --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container-sm text-white ">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ">
                    <svg class="bi me-1 text-white" width="200" height="10">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <img src="{{ asset('img/logo.svg') }}">
                </a>

                <ul class="nav nav-pills nav-fill nav-justified row align-items-start ">
                    <li class="nav-item">
                        <a style="background-color: #8a2be2" class="nav-link active" aria-current="page"
                            href="{{ route('site.index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" style="text-decoration: blueviolet"
                                    href="{{ route('site.cadastronovo') }}">Novos</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('app.modem.cadastromodem') }}">Editar</a></li>
                            {{-- <li><a class="dropdown-item" href="{{ route('app.local.cadastrolocal') }}">Remover</a></li> --}}
                            {{-- add dropdown --}}
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ route('site.estoque') }}" class="nav-link">Estoque</a></li>
                    <li class="nav-item"><a href="{{ route('site.relatorio') }}" class="nav-link">Relatórios</a></li>
                </ul>
            </header>
        </div>
    </header>
    <script src="https://kit.fontawesome.com/cae6919cdb.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    @yield('navbar_basico')
</body>

</html>
