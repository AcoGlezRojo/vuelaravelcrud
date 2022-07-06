<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#welcome"></use>
                        </svg>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbars">
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="#" class="nav-link px-2 text-white">Home</a></li>
                            <li><a href="#" class="nav-link px-2 ">Features</a></li>
                            <li><a href="#" class="nav-link px-2 ">Pricing</a></li>
                            <li><a href="#" class="nav-link px-2 ">FAQs</a></li>
                            <li><a href="#" class="nav-link px-2 ">About</a></li>
                        </ul>

                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                        </form>

                        @if (Route::has('login'))
                        <div class="text-end">
                            @auth
                            <a href="{{ url('/profile') }}" class="btn btn-outline-light me-2">Profile</a>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-warning">Sign-up</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>