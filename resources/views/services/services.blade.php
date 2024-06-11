@extends('base')

@section('title', 'Услуги')

@section('content')
    <div class="services container">
        <h2 id="services">Услуги</h2>

        <div class="services-wrapper mt-10 xl:mt-20 flex justify-center sm:justify-between flex-wrap gap-y-12">

            @foreach($services as $service)
                <div class="service-card overflow-hidden rounded-lg">
                    <div class="service-image bg-cover w-[300px] h-[361px] xl:w-[390px] xl:h-[470px] relative transition-all duration-300 hover:scale-110" style="background-image: url('{{ $service->image }}')">
                        <div
                            class="black-service-wrapper flex items-center w-full h-full bg-gradient-to-t from-black to-transparent">
                            <p class="text-accentYellow w-full text-center text-4xl xl:text-6xl">{{ $service->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
