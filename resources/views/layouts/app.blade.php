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
            <a href="/">
                <div class="flex flex-col items-center justify-center md:text-center">
                    <img class="w-6" src="{{asset('img/icons/shield-ico.svg')}}" alt="Shield">
                    <h3 class="hd-secondary">Pet Shield</h3>
                </div>
            </a>
            <ul
                class="flex flex-wrap items-center justify-around flex-1 my-5 mb-7 lg:my-0 lg:mb-0 lg:justify-around lg:mx-24">
                <li class="nav-item">
                    <a class="nav-link" href="/">inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ads">anuncios</a>
                </li>
            </ul>
            @auth
            <div class="flex items-center justify-center">
                <a href="/profile" title="Ver tu Perfil">
                    <div class="flex flex-wrap items-center justify-center mr-4">
                        <img class="w-12 mr-2" src="{{asset('storage/img/profiles/user.svg')}}" alt="Login">
                        <h4 class="text-white">{{Auth::user()->name}}</h4>
                    </div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="post" title="Cerrar Sesión">
                        <img class="w-8 bg-white rounded-md" src="{{asset('img/icons/exit.svg')}}" alt="Login">
                    </button>
                </form>
            </div>
            @endauth
            @guest
            <div class="flex items-center justify-center">
                <div class="mr-4">
                    <a class="flex items-center btn btn--main" href="/login">
                        <img class="w-4 h-6 mr-2" src="{{asset('img/icons/lock-opened.svg')}}" alt="Login">
                        <span>Login</span>
                    </a>
                </div>
                <div>
                    <a class="flex items-center btn btn--main" href="/register">
                        <img class="w-4 h-6 mr-2" src="{{asset('img/icons/lock-closed.svg')}}" alt="Registro">
                        <span>Registro</span>
                    </a>
                </div>
            </div>
            @endguest
        </div>
    </nav>

    <main class="container p-3 mx-auto my-16">
        @yield('content')
    </main>

    <footer class="py-3 text-center bg-blue-dark ">
        <p class="text-white"> &copy; Desarrollado por Jorge Martínez, {{ date("Y") }}</p>
    </footer>

</body>

</html>