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
    <nav class="text-white bg-blue-gradient">
        <div class="container flex flex-col px-4 py-4 mx-auto md:flex-row md:items-center">
            <div>
                <h1 class="text-3xl font-bold">Pet Shield</h1>
            </div>
            <ul class="flex flex-wrap items-center justify-center flex-1 my-5 mb-7 md:my-0 md:mb-0 ">
                <li class="mr-4">
                    <a href="#">inicio</a>
                </li>
                <li class="mr-4">
                    <a href="#">anuncios</a>
                </li>
                <li class="mr-4">
                    <a href="#">nolose</a>
                </li>
                <li class="mr-4">
                    <a href="#">nolose</a>
                </li class="mr-4">
                <li class="mr-4">
                    <a href="#">nolose</a>
                </li>
            </ul>
            <div class="flex items-center justify-center">
                <div class="mr-4">
                    <a class="px-4 py-2 text-base font-semibold rounded-lg bg-green-mid" href="">Login</a>
                </div>
                <div>
                    <a href="">Registro</a>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')

</body>

</html>