@extends('layouts.app')
@section('content')


<a class="inline-flex justify-center mb-8 text-white btn btn--main align-items" href="/ads">
    <img class="mr-3" width="15" src="{{asset('img/icons/arrow-back.svg')}}" alt="Volver">
    <span>Volver</span>
</a>

<h2 class="mb-3 text-blue-dark">Crear nuevo anuncio</h2>
<p class="mb-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque officiis neque quis placeat qui odit
    consectetur. Quod porro sint numquam vel provident aliquam exercitationem accusamus vitae suscipit, minus earum
    similique.</p>

<form method="POST" enctype="multipart/form-data" action="/ads/store" novalidate>
    {{ csrf_field() }}

    <h3 class="mb-5 text-blue-dark">Información sobre el anuncio</h3>
    <div class="mb-12">
        <label for="title" class="mb-2 form-label">Título</label>
        <input id="title" type="text" class="form-input @error('title') border-red-500 @enderror" title="title"
            value="{{old('title')}}" required autocomplete="title" autofocus>
        @error('title')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="description" class="mb-2 form-label">Descripción</label>
        <textarea id="description" type="text" class="form-input @error('description') border-red-500 @enderror"
            description="description" required autocomplete="description" autofocus>{{old('description')}}</textarea>
        @error('description')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <h3 class="mb-5 text-blue-dark">Información sobre tu mascota</h3>

    <div class="mb-12">
        <label for="animal" class="mb-2 form-label">Animal</label>
        <select name="animal" id="animal" class="form-input @error('animal') border-red-500 @enderror" name="animal"
            required autocomplete="animal">
            <option value="perro">Perro</option>
            <option value="gato">Gato</option>
        </select>
        @error('animal')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="name" class="mb-2 form-label">Nombre</label>
        <input id="name" type="text" class="form-input @error('name') border-red-500 @enderror" name="name"
            value="{{old('name')}}" required autocomplete="name" autofocus>
        @error('name')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="gender" class="mb-2 form-label">Género</label>
        <select name="gender" id="gender" class="form-input @error('gender') border-red-500 @enderror" name="gender"
            required autocomplete="gender">
            <option value="male">Macho</option>
            <option value="female">Hembra</option>
        </select>
        @error('gender')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="weight" class="mb-2 form-label">Peso (kg)</label>
        <input id="weight" type="number" step="0.01" class="form-input @error('weight') border-red-500 @enderror"
            weight="weight" value="{{old('weight')}}" required autocomplete="weight" autofocus>
        @error('weight')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="birthday" class="mb-2 form-label">Cumpleaños</label>
        <input id="birthday" type="date" class="form-input @error('birthday') border-red-500 @enderror"
            birthday="birthday" value="{{old('birthday')}}" required autocomplete="birthday" autofocus>
        @error('birthday')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="sterilized" class="mb-2 form-label">Esterilizado</label>
        <select name="sterilized" id="sterilized" class="form-input @error('sterilized') border-red-500 @enderror"
            name="sterilized" required autocomplete="sterilized">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        @error('sterilized')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-12">
        <label for="image" class="mb-2 form-label">Foto</label>
        <input id="image" type="file" class="form-input @error('image') border-red-500 @enderror"
            value="{{old('image')}}" required autocomplete="image" autofocus>
        @error('image')
        <span class="form-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <button type="submit" class="text-white btn btn--main">
        {{ __('Crear anuncio') }}
    </button>
</form>
@endsection