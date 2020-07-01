@extends('layouts.app')

@section('content')
<div class="mb-10 text-center">
    <h1 class="mb-3 text-blue-dark">
        Registro
    </h1>
    <p>Desde aquí puedes crear un usuario para poder acceder al sistema y exponer anuncios personalizados.</p>
    <p>Si ya estás registrado, puedes iniciar sesión desde <a class="text-green-dark" href="/login">aquí</a>
    </p>
</div>



<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-10">
        <label for="name" class="mb-2 form-label">Nombre</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-input @error('name') border-red-500 @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="mb-10">
        <label for="email" class="mb-2 form-label">Correo electrónico</label>

        <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="profile-phone" class="mb-2 form-label">Número Teléfono</label>

        <input id="profile-phone" type="text" class="form-input @error('profile-phone') border-red-500 @enderror"
            name="profile-phone" value="{{ old('profile-phone') }}" required autocomplete="profile-phone">

        @error('profile-phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="profile-city" class="mb-2 form-label">Provincia</label>

        <input id="profile-city" type="text" class="form-input @error('profile-city') border-red-500 @enderror"
            name="profile-city" value="{{ old('profile-city') }}" required autocomplete="profile-city">

        @error('profile-city')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="profile-city" class="mb-2 form-label">Localidad</label>

        <input id="profile-city" type="text" class="form-input @error('profile-city') border-red-500 @enderror"
            name="profile-city" value="{{ old('profile-city') }}" required autocomplete="profile-city">

        @error('profile-city')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="password" class="mb-2 form-label">Contraseña</label>

        <input id="password" type="password" class="form-input @error('password') border-red-500 @enderror"
            name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-8">
        <label for="password-confirm" class="mb-2 form-label">Confirmar contraseña</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required
                autocomplete="new-password">
        </div>
    </div>

    <div class="mb-0">
        <button type="submit" class="text-white btn btn--main">
            Registro
        </button>
    </div>
</form>

@endsection