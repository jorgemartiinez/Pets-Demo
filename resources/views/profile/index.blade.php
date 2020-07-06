@extends('layouts.app')
@section('content')


<h2 class="mb-8 text-blue-dark">Profile Info</h2>

<div class="inline-flex flex-col items-center justify-center w-full mb-8 rounded-lg bg-blue-dark">

    <div class="relative mb-4">
        <img class="w-40 p-3 text-center rounded-full" src="{{asset('storage/img/profiles/'.$user->profile->image)}}"
            alt="Foto de perfil de {{$user->name}}">
        <a onclick="document.getElementById('image').click()">
            <img class="absolute bottom-0 right-0 w-8" src="{{asset('img/icons/pencil.svg')}}"
                alt="Editar foto de perfil de {{$user->name}}">
        </a>
    </div>
    <h3 class="text-white">{{$user->name}}</h3>
</div>

<form method="POST" action="{{ route('login') }}" novalidate>
    @csrf

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




    <button type="submit" class="text-white btn btn--main">
        {{ __('Editar información') }}
    </button>

    </div>


    </div>
    @endsection