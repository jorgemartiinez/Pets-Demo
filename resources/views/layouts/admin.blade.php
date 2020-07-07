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

    <a class="inline-flex justify-center m-2 text-white btn btn--main align-items" href="/ads">
        <img class="mr-3" width="15" src="{{asset('img/icons/arrow-back.svg')}}" alt="Volver">
        <span>Volver</span>
    </a>

    <div class="flex">
        <aside class="w-1/5 h-40 text-white bg-blue-dark">
            <ul class="flex flex-col">
                <li class="flex items-center p-5 font-semibold">
                    <img class="mr-4" src="{{ asset('img/icons/request.svg') }}" alt="Requests">
                    <a href="/admin/requests">Solicitudes</a>
                </li>
            </ul>
        </aside>

        <main class="container p-3">
            @yield('content')
        </main>
    </div>

    <footer class="py-3 text-center bg-blue-dark ">
        <p class="text-white"> &copy; Desarrollado por Jorge Martínez, {{ date("Y") }}</p>
    </footer>

</body>

</html>