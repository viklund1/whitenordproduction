@extends('base')

@section('title', 'Наши работы')

@push('fancy')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
@endpush

@push('scripts')
    <script>
        Fancybox.bind("[data-fancybox]", {

        });
    </script>
@endpush

@section('content')
    <div class="works-container container">
        <h2>Наши работы</h2>

        <h4 class="mt-10 lg:mt-20 text-lg lg:text-2xl text-center">На этой странице собраны фотографии реальных работ нашего производства</h4>

        <div class="works-wrapper flex flex-wrap w-fit mx-auto mt-10 justify-center">
            <a href="{{ asset('images/works/work1.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work1.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work2.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work2.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work3.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work3.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work4.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work4.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work5.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work5.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work6.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work6.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work7.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work7.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work8.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work8.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work9.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work9.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work10.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work10.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work11.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work11.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work12.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work12.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work13.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work13.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>

            <a href="{{ asset('images/works/work14.jpg') }}" data-fancybox="our-works">
                <img src="{{ asset('images/works/work14.jpg') }}" alt="work" class="bg-cover w-52 h-52 object-cover">
            </a>
        </div>


    </div>
@endsection
