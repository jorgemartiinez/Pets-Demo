@extends('layouts.admin')
@section('content')
<h2 class="mb-4">Gestión de anuncios</h2>
<p>Desde aquí puedes gestionar las distintas opciones de la aplicación.</p>
<p>Puedes empezar seleccionando elementos de la parte izquierda del panel</p>

<table class="mt-12 table-auto">
    <thead>
        <tr>
            <th class="px-4 py-2">Título</th>
            <th class="px-4 py-2">Animal</th>
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2">Edad</th>
            <th class="px-4 py-2">Cumpleaños</th>
            <th class="px-4 py-2">Estado</th>
            <th class="px-4 py-2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ads as $ad)
        <tr class="transition-colors ease-in cursor-pointer hover:bg-gray-100"
            onclick="window.location='/ads/{{$ad->id}}'">
            <td class="px-4 py-2 border">{{ Str::limit($ad->title, 30, '...') }}</td>
            <td class="px-4 py-2 border">{{ $ad->animal }}</td>
            <td class="px-4 py-2 border">{{ $ad->name }}</td>
            <td class="px-4 py-2 border">{{ convertToYearsAndMonths($ad->birthday) }}</td>
            <td class="px-4 py-2 border">{{ $ad->birthday }}</td>
            @if ($ad->state == 0)
            <td class="px-4 py-2 bg-yellow-500 border"
                title="Un moderador deberá de aceptar tu anuncio para que pueda mostrarse en la web">Por aceptar</td>
            @elseif($ad->state == 1)
            <td class="px-4 py-2 text-white bg-green-500 border"
                title="Tu anuncio ya ha sido aceptado y está publicado en la web">Publicado</td>
            @else
            <td class="px-4 py-2 bg-yellow-500 border" title="No se mostrará">Finalizado</td>
            @endif
            <td class="flex px-0 py-0 text-white border">
                <form method="POST" action="/admin/requests/validate/{{$ad->id}}">
                    {{ csrf_field() }}
                    @if ($ad->state==0)
                    <button class="mr-1 bg-green-500 btn btn--main">Validar</button>
                    @else
                    <button class="mr-1 bg-red-500 btn btn--main">Quitar publicación</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection