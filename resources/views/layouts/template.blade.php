<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <title>Sistema de Estoque</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <a class="navbar-brand" href="/"><strong>Sistema de Estoque</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('product.create')}}">Cadastrar Novo</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Olá {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{action('UserController@logout')}}">Sair</a>
                        </div>
                    </li>
                </ul>
            @endauth
        </div>
        @guest
            <div class="nav justify-content-end">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{route('product.index')}}">Produtos</a>
                    <a href="/login" class="nav-item nav-link">Login</a>
                    <a href="/register" class="nav-item nav-link">Registrar-se</a>
                </div>
            </div>
        @endguest
    </nav>

    <main class="container">
        <br>
        @include('flash::message')
        @yield('content')
    </main>

</html>