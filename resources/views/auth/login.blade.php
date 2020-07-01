@extends('layouts.app')

@section('content')

<div>

    <div class="mb-10 text-center">
        <h1 class="mb-3 text-blue-dark">
            Login
        </h1>
        <p>Desde aquí puedes iniciar sesión si ya tienes una cuenta creada.</p>
        <p>Si todavía no te has registrado, puedes hacerlo desde <a class="text-green-dark" href="/register">aquí</a>
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf

        <div class="mb-12">
            <label for="email" class="mb-2 form-label">Correo electrónico</label>
            <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="form-error-message" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-12">
            <label for="password" class="mb-2 form-label">Contraseña</label>
            <input id="password" type="password" class="form-input @error('password') border-red-500 @enderror"
                name="password" required autocomplete="current-password">
            @error('password')
            <span class="form-error-message" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    Recordar
                </label>
            </div>
        </div>

        <div>
            <button type="submit" class="text-white btn btn--main">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
            <a class="btn btn--link" href="{{ route('password.request') }}">
                Has olvidado tu contraseña?
            </a>
            @endif
        </div>
</div>

</form>

@endsection