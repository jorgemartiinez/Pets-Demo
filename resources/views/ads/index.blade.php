@extends('layouts.app')
@section('content')

<section class="mb-12">
    <div class="flex flex-col items-center justify-between md:flex-row">
        <h1 class="mb-4 text-blue-dark">Anuncios</h1>
        @auth
        <div class="mb-4 md:flex md:items-center md:mb-0">
            <a href="/ads/create" class="mr-4 text-white btn btn--main">Crear un anuncio</a>
            <a href="/ads/show" class="text-white btn btn--main">Ver tus anuncios</a>
        </div>
        @endauth
    </div>

    <p class="mb-6">En esta página puedes ver los anuncios creados por los distintos usuarios en busca de un nuevo dueño
        su mascota. Si inicias sesión puedes crear un anuncio o visualizar los que ya tienes creados.</p>
    <select class="form-input">
        <option disabled selected>Seleccionar</option>
        <option>Alicante</option>
    </select>

    <div class="grid grid-flow-row grid-cols-1 mt-10 md:grid-cols-2 md:gap-6 lg:grid-cols-4 lg:gap-3">
        @foreach ($ads as $ad)
        <a href="ads/{{$ad->id}}">
            <article
                class="flex flex-col items-center justify-center transition duration-300 transform rounded-sm shadow-md linear hover:-translate-y-2">
                <img class="object-cover object-top w-full h-64 rounded-t-sm bg"
                    src="{{asset('storage/img/pets/'.$ad->image)}}" alt="tete">
                <div class="w-full p-3 -mt-10">
                    <div
                        class="flex items-center justify-center px-16 py-2 transform -translate-y-6 bg-white border-2 rounded-full border-blue-dark">
                        <h3 class="mr-2 font-normal text-center text-green-light">{{$ad->name}}</h3>
                        <img src="{{asset('img/icons/'.$ad->gender.'.svg')}}" alt="Género" width="25">
                    </div>
                    <div class="flex flex-col items-center w-full">
                        <img class="mb-3" src="{{asset('img/icons/birthday.svg')}}" alt="Cumpleaños Mascota" width="30">
                        <p class="mb-5 text-green-light">{{$ad->birthday}}</p>
                        <p class="self-end ml-auto text-sm text-blue-dark">En {{$ad->user->profile->city}}
                            ({{$ad->user->profile->province}})</p>
                    </div>
                </div>
            </article>
        </a>
        @endforeach
    </div>
</section>

@component('components.notRegistered')
@endcomponent

{{ $ads->links() }}


@endsection