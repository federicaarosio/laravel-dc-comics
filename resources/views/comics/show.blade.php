@extends('layouts.app')

@section('main-content')
<section class="comics">

    <div class="comics-container">

        <span class="tag">
            Current series
        </span>

        <div class="article-container">

                <article class="single-article">
                    <img src="{{ $comic['thumb'] }}" alt="comic thumb" class="comic-thumb">
                    <p>Series: {{ $comic['series'] }}</p>
                    <p class="description">Description: {{ $comic['description'] }}</p>
                    <p>Price: {{ $comic['price'] }}</p>
                    <p>Sale Date: {{ $comic['sale_date'] }}</p>
                    <p>Type: {{ $comic['type'] }}</p>

                    <div class="actions mb-3 pt-3">
                        <a href="{{ route('comics.edit', $comic->id) }}">
                            <button class="btn btn-primary">
                                Edit this comic
                            </button>
                        </a>
                    </div>
                </article>

        </div>


    </div>
</section>

@endsection