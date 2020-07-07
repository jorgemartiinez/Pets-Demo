@extends('layouts.app')
@section('content')

<a class="inline-flex justify-center mb-8 text-white btn btn--main align-items" href="/ads">
    <img class="mr-3" width="15" src="{{asset('img/icons/arrow-back.svg')}}" alt="Volver">
    <span>Volver</span>
</a>

<h2 class="mb-10 text-center text-blue-dark">{{$ad->title}}</h2>

<section class="flex flex-col mb-4 lg:flex-row">

    <div class="mb-8">
        <img class="rounded-lg shadow-md h-px-250" src="{{asset('storage/img/pets/'.$ad->image)}}"
            alt="Foto de {{$ad->name}}">
    </div>

    <div class="flex flex-col items-start lg:ml-12">
        <h3 class="mb-2 uppercase text-green-dark">Descripción</h3>
        <p class="mb-8">{{$ad->description}}</p>

        <h3 class="mb-2 uppercase text-green-dark">Información mascota</h3>
        <p class="mb-1"><strong>Nombre:</strong> {{$ad->name}}</p>
        <p class="mb-1">
            <strong>Género:</strong>
            {{($ad->gender == 'male') ? 'Macho' : 'Hembra'}}
        </p>
        <p class="mb-1"><strong>Edad:</strong> {{convertToYearsAndMonths($ad->birthday)}}</p>
        <p class="mb-1"><strong>Cumpleaños:</strong> {{$ad->birthday}}</p>
        <p class="mb-1"><strong>Peso:</strong> {{$ad->weight}} kg</p>
        <p class="mb-8"><strong>Esterilizado:</strong> {{($ad->sterilized) ? 'Sí' : 'No'}}</p>

        <h3 class="mb-2 uppercase text-green-dark">Contactar</h3>
        <p class="mb-1"><strong>Nombre anunciante:</strong> {{$ad->user->name}}</p>
        <p class="mb-5"><strong>Localidad:</strong>
            {{$ad->user->profile->city}}
            ({{$ad->user->profile->province}})</p>

        <a class="inline-flex justify-center mb-4 text-xl text-white btn btn--main align-items bg-blue-dark"
            href="tel:{{$ad->user->profile->phone}}">
            <img class="mr-3" width="20" src="{{asset('img/icons/phone.svg')}}" alt="Llamar a {{$ad->user->name}}">
            <span>{{$ad->user->profile->phone}}</span>
        </a>

        <a class="inline-flex justify-center mb-4 text-xl text-white btn btn--main align-items bg-green-light"
            href="mailto:{{$ad->user->email}}">
            <img class="mr-3" width="20" src="{{asset('img/icons/envelope.svg')}}"
                alt="Mandar email a {{$ad->user->name}}">
            <span>{{$ad->user->email}}</span>
        </a>
    </div>

</section>

@component('components.notRegistered')
@endcomponent

@endsection