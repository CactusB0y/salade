<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/article">Articles</a>
                        </li>
                        @if (Route::has('login'))
                        <div>
                            @auth
                            <a href="{{ url('/home') }}">Home</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                                <button type="submit">log out</button>
                            </form>
                                @else
                                    <a href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        @yield('content')
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
