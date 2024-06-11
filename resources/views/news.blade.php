@extends('base')

@section('title', 'Новости')

@section('content')
    <div class="news-container container">
        <h2>Новости</h2>

        <div class="news-wrapper mt-10 xl:mt-20 flex justify-center lg:justify-between flex-wrap gap-y-12">
            @foreach($news as $new)
                <a href="{{ route('show.news', ['new' => $new->id]) }}" class="news-card w-[390px]">
                    <img src="{{ $new->image }}" alt="" class="w-full h-60 bg-cover shadow-2xl">
                    <div class="news-card-content mt-4">
                        <h4 class="text-2xl">{{ $new->title }}</h4>
                        @php
                            $date = new \Carbon\Carbon($new->created_at);
                        @endphp
                        <p class="date">{{ $date->isoFormat("D MMMM") }}</p>

                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
