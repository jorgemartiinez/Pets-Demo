<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Nav bar -->
    <nav class="text-white nav bg-blue-gradient">
        <div class="container flex flex-col px-4 py-4 mx-auto lg:flex-row lg:items-center">
            <div class="flex flex-col items-center justify-center md:text-center">
                <img class="w-6" src="{{asset('img/icons/shield-ico.svg')}}" alt="Shield">
                <h1 class="hd-secondary"><a href="#">Pet Shield</a></h1>
            </div>
            <ul
                class="flex flex-wrap items-center justify-around flex-1 my-5 mb-7 lg:my-0 lg:mb-0 lg:justify-around lg:mx-24">
                <li class="nav-item">
                    <a class="nav-link" href="#">inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">anuncios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">nolose</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">nolose</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">nolose</a>
                </li>
            </ul>
            <div class="flex items-center justify-center">
                <div class="mr-4">
                    <a class="flex items-center btn btn--main" href="">
                        <img class="w-4 h-6 mr-2" src="{{asset('img/icons/lock-opened.svg')}}" alt="Login">
                        <span>Login</span>
                    </a>
                </div>
                <div>
                    <a class="flex items-center btn btn--main" href="">
                        <img class="w-4 h-6 mr-2" src="{{asset('img/icons/lock-closed.svg')}}" alt="Registro">
                        <span>Registro</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="py-3 text-center bg-blue-dark ">
        <p class="text-white"> &copy; Desarrollado por Jorge Martínez, {{ date("Y") }}</p>
    </footer>

</body>

</html>