@extends('layouts.app')

@section('main-content')

<section class="movies">

    <div class="comics-container container">

        <h1 class="tag">
            Movies
        </h1>

        <div class="article-container d-flex justify-content-between flex-wrap">
            <article class="card" style="width: 18rem;">
                <img src="{{ $movie['src'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    <p>Description: {{ $movie['description'] }}</p>

                    <div class="actions mb-3 pt-3">
                        <a href="{{ route('movies.edit', $movie->id) }}">
                            <button class="btn btn-primary">
                                Edit this movie
                            </button>
                        </a>
                    </div>

                </div>


                
            </article>
        </div>

    </div>
</section>

@endsection