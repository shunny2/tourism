<!DOCTYPE html>
<html lang="pt-BR">

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
</body>

</html>
