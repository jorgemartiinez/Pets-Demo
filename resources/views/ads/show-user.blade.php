@extends('layouts.app')
@section('content')

<a class="inline-flex justify-center mb-8 text-white btn btn--main align-items" href="/ads">
    <img class="mr-3" width="15" src="{{asset('img/icons/arrow-back.svg')}}" alt="Volver">
    <span>Volver</span>
</a>

<h2 class="mb-3 text-blue-dark">Anuncios creados por ti</h2>
<p>En esta página se mostrarán los anuncios que has creado. Tu anuncio deberá de ser aceptado por un moderador una vez
    lo hayas publicado.</p>


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
            <td class="px-4 py-2 border">{{ $ad->age }}</td>
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
                <form action="">
                    <button class="mr-1 bg-red-500 btn btn--main">Eliminar</button>
                </form>
                <a href="/ads/edit/{{$ad->id}}" class="bg-green-500 btn btn--main">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection