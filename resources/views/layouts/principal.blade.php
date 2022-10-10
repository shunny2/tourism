<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Turismo</title>
</head>

<body>
    <nav class="black">
        <div class="container nav-wrapper">
            <a href="/" class="brand-logo">Turismo</a>

            <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
                @if (Auth::check())
                    <li>
                        <a href="{{ route('dashboard') }}">Painel</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('register') }}">Registro</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    <ul class="black sidenav" id="mobile-nav">
        @if (Auth::check())
            <li>
                <a href="{{ route('dashboard') }}" class="white-text">Painel</a>
            </li>
        @else
            <li>
                <a href="{{ route('register') }}" class="white-text">Registro</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="white-text">Login</a>
            </li>
        @endif
    </ul>

    <div class="container">
        @yield('conteudo-principal')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        @if (session('sucesso'))
            M.toast({
                html: "{{ session('sucesso') }}"
            });
        @endif

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var options = {
                'edge': 'right'
            }
            var instances = M.Sidenav.init(elems, options);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems);
        });
    </script>
</body>

</html>
