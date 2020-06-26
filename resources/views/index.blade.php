@extends('layouts.app')


@section('content')
<main class="container p-3 mx-auto my-16">

    <section class="mb-16">
        <div class="mb-12 font-bold text-center">
            <h2 class="mb-4 text-5xl hd-secondary text-green-light">¿Ya no puedes hacerte cargo de tu mascota?</h2>
            <h3 class="mb-6 hd-tertiary text-blue-dark">Te ayudamos a buscarle un nuevo dueño</h3>
            <h4 class="mb-12 hd-quaternary text-grey-dark">Solo tienes que publicar tu anuncio y esperar a que <br>
                algún interesado se ponga en contacto</h4>
            <div>
                <a href="" class="text-2xl text-white uppercase btn bg-blue-dark btn--full">Empezar ya</a>
            </div>
        </div>
        <div class="text-center d-inline-block">
            <img class="py-10 mx-auto w-75" src="{{asset('img/home/hero-illus.svg')}}" alt="Empezar ya">
        </div>
    </section>

    <section class="mb-16">
        <div class="mb-6">
            <h3 class="text-center uppercase hd-secondary text-blue-dark md:text-left">¿Qué es Pet Shield?</h3>
        </div>
        <div class="flex flex-col items-start md:flex-row">
            <div class="mx-auto mb-8 md:w-4/12 md:pl-10 xl:pl-32 md:self-start">
                <img class="w-full h-full" src="{{asset('img/home/cat-illus.svg')}}"
                    alt="Ilustración Gato - Qué Es Pet Shield">
            </div>
            <div class="md:w-8/12 md:order-first">
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem culpa illo repellendus
                    quibusdam
                    quidem. Nihil consectetur animi quo nulla libero blanditiis rerum, impedit mollitia cupiditate quae
                    earum modi alias aperiam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                    inventore, a corporis excepturi consequuntur saepe, reiciendis labore ad accusamus dolore ea hic
                    rerum, porro earum sapiente dolorum? Error, ratione esse. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Dolore, dolor pariatur aperiam sunt sequi atque modi nisi quasi officiis earum
                    minus assumenda voluptatum ipsa iure obcaecati nam voluptatem provident aliquid.</p>
            </div>
    </section>

    <section>
        <div>
            <div class="mb-6">
                <h2 class="text-center uppercase hd-secondary text-blue-dark md:text-left">¿Cómo funciona?</h2>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, error voluptatum repudiandae vel
                exercitationem a, minus aliquam asperiores eos ducimus ipsam temporibus consequuntur perspiciatis
                tenetur magnam molestiae odit voluptas beatae?.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, error voluptatum repudiandae vel
                exercitationem a, minus aliquam asperiores eos ducimus ipsam temporibus consequuntur perspiciatis
                tenetur magnam molestiae odit voluptas beatae?.</p>
        </div>
    </section>

</main>
@endsection