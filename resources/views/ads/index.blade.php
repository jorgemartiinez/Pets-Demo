@extends('layouts.app')
@section('content')

<section>
    <h1 class="mb-4 text-blue-dark">Anuncios</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque qui ipsum, asperiores incidunt dignissimos,
        dolore
        odit ut voluptas deleniti mollitia debitis delectus optio iure tempore sunt maxime rerum quasi! Quis.</p>

    <div class="grid grid-flow-row grid-cols-1 mt-10 md:grid-cols-2 md:gap-6 lg:grid-cols-4 lg:gap-3">

        @foreach ($ads as $ad)
        <article
            class="flex flex-col items-center justify-center transition duration-300 transform rounded-sm shadow-md cursor-pointer linear hover:-translate-y-2">
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
        @endforeach

    </div>
</section>



@endsection