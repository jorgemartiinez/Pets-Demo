@extends('layouts.app')
@section('content')

<a class="inline-flex justify-center mb-8 text-white btn btn--main align-items" href="/ads">
    <img class="mr-3" width="15" src="{{asset('img/icons/arrow-back.svg')}}" alt="Volver">
    <span>Volver</span>
</a>

<h2 class="mb-8 text-blue-dark">Profile Info</h2>

<div class="inline-flex flex-col items-center justify-center w-full mb-8 rounded-lg bg-blue-dark">
    <div class="relative mb-4">
        <img class="w-40 p-3 text-center rounded-full" src="{{asset('storage/img/profiles/'.$user->profile->image)}}"
            alt="Foto de perfil de {{$user->name}}">
        <a class="cursor-pointer" onclick="document.getElementById('image').click()">
            <img class="absolute bottom-0 right-0 w-8" src="{{asset('img/icons/pencil.svg')}}"
                alt="Editar foto de perfil de {{$user->name}}">
        </a>
    </div>
    <h3 class="text-white">{{$user->name}}</h3>
</div>

<form method="POST" enctype="multipart/form-data" action="/profile/update" novalidate>
    @csrf
    @method('PUT')

    <input id="image" name="image" type="file" hidden>

    <div class="mb-12">
        <label for="name" class="mb-2 form-label">Nombre</label>
        <input id="name" type="name" class="form-input @error('name') border-red-500 @enderror" name="name"
            value="{{ $user->name }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="email" class="mb-2 form-label">Correo electrónico</label>
        <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror" name="email"
            value="{{$user->email}}" required autocomplete="email">
        @error('email')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="phone" class="mb-2 form-label">Número Teléfono</label>
        <input id="phone" type="text" class="form-input @error('phone') border-red-500 @enderror" name="phone"
            value="{{ $user->profile->phone }}"" required autocomplete=" phone">
        <span class="block text-gray-600">Esta información será visible para que puedan contactarte cuando publiques un
            anuncio.</span>
        @error('phone')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="province" class="mb-2 form-label">Provincia</label>
        <select name="province" id="province" class="form-input @error('province') border-red-500 @enderror"
            name="province" value="{{ $user->profile->province }}" required autocomplete="province">
            @foreach ($provincias as $prov)
            <option @if ($prov==$user->profile->province) selected @endif
                value="{{$prov}}">{{$prov}}</option>
            @endforeach
        </select>

        @error('province')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="city" class="mb-2 form-label">Localidad</label>

        <input id="city" type="text" class="form-input @error('city') border-red-500 @enderror" name="city"
            value="{{ $user->profile->city }}" required autocomplete="city">
        <span class="block text-gray-600">Esta información se tendrá en cuanta a la hora de clasificar los
            anuncios.</span>
        @error('city')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <button type="submit" class="text-white btn btn--main">
        {{ __('Editar información') }}
    </button>
    </div>

    </div>
    @endsection