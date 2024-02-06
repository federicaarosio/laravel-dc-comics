@extends('layouts.app')

@section('main-content')

<section class="movies">

    <div class="comics-container">

        <span class="tag">
            Movies
        </span>

        <div class="article-container">
            @foreach ($movies as $movie)
                <article>
                    {{-- <a href="{{ route('comics.show', $comic['id']) }}"> --}}
                    
                        <img src="{{ $movie['src'] }}" alt="movie poster" class="comic-thumb">
                        <p>{{ $movie['title'] }}</p>

                    </a>
                </article>
            @endforeach
        </div>

    </div>
</section>

@endsection