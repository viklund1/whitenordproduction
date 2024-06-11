@extends('base')

@section('title', 'Новости')

@section('content')
    <div class="news-container container">
        <h2>{{ $news_info->title }}</h2>
        @php
            $date = new \Carbon\Carbon($news_info->created_at);
        @endphp
        <p class="date mt-2">{{ $date->isoFormat("D MMMM") }}</p>

        <div class="new-content mt-10">
            <img src="{{ $news_info->image }}" alt="">
            <p class="mt-10">{!! $news_info->text !!}</p>
        </div>

    </div>
@endsection
