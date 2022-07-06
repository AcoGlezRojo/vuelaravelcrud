<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </link>


</head>

<body>



    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#welcome"></use>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
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

    <div id="app">
        <example-component></example-component>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>