@extends('layouts.app')

@section('main-content')
<section class="comics">

    <div class="comics-container">

        <span class="tag">
            Current series
        </span>

        <div class="article-container">
            @foreach ($comics as $comic)
                <article>
                    <a href="{{ route('comics.show', $comic['id']) }}">
                    
                        <img src="{{ $comic['thumb'] }}" alt="comic thumb" class="comic-thumb">
                        <p>{{ $comic['series'] }}</p>

                    </a>
                </article>
            @endforeach
        </div>

        <div class="button-wrapper">
            <button>
                Load more
            </button> 
        </div>

    </div>
</section>
{{-- <section class="pre-footer">
    <div class="banner-container">
        <div class="wrapper">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
            <p>Digital comics</p>
        </div>
        <div class="wrapper">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise">
            <p>DC merchandise</p>
        </div>
        <div class="wrapper">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscription">
            <p>Subscription</p>
        </div>
        <div class="wrapper">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop locator">
            <p>Comic shop locator</p>
        </div>
        <div class="wrapper">
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="visa">
            <p>DC power visa</p>
        </div>
    </div>
</section> --}}
@endsection