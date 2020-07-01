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

<form method="POST" action="{{ route('register') }}" novalidate>
    @csrf

    <div class="mb-10">
        <label for="name" class="mb-2 form-label">Nombre</label>

        <input id="name" type="text" class="form-input @error('name') border-red-500 @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="email" class="mb-2 form-label">Correo electrónico</label>

        <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="phone" class="mb-2 form-label">Número Teléfono</label>

        <input id="phone" type="text" class="form-input @error('phone') border-red-500 @enderror" name="phone"
            value="{{ old('phone') }}" required autocomplete="phone">

        @error('phone')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="province" class="mb-2 form-label">Provincia</label>

        <select name="province" id="province" class="form-input @error('province') border-red-500 @enderror"
            name="province" value="{{ old('province') }}" required autocomplete="province">

            @foreach ($provincias as $prov)
                <option value="{{$prov}}">{{$prov}}</option>
            @endforeach
        </select>

        @error('province')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="city" class="mb-2 form-label">Localidad</label>

        <input id="city" type="text" class="form-input @error('city') border-red-500 @enderror" name="city"
            value="{{ old('city') }}" required autocomplete="city">

        @error('city')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-10">
        <label for="password" class="mb-2 form-label">Contraseña</label>

        <input id="password" type="password" class="form-input @error('password') border-red-500 @enderror"
            name="password" required autocomplete="new-password">

        @error('password')
        <span class="form-error-message" role="alert">
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