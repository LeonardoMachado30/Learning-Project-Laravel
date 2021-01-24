<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts do google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!--CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!--CSS da aplicação-->
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <div class="container-fluid">
                    <a class="navbar-toggler" href="/">Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/events/create">Criar Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Entrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            @if(session('msg'))
            <div class="alert alert-sucess alert-sucess fade show" role="alert">
                {{ session('msg')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @yield('content')
        </main>
        <footer class="footer bg-footer container-fluid">
            <div>
                <p>HDC Events &copy; 2020</p>
            </div>
        </footer>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
</html>