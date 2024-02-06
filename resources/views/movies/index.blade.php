@extends('layouts.app')

@section('main-content')

<section class="movies">

    <div class="comics-container">

        <span class="tag">
            Movies
        </span>

        <div class="article-container">
            {{-- @foreach ($comics as $comic)
                <article>
                    <a href="{{ route('comics.show', $comic['id']) }}">
                    
                        <img src="{{ $comic['thumb'] }}" alt="comic thumb" class="comic-thumb">
                        <p>{{ $comic['series'] }}</p>

                    </a>
                </article>
            @endforeach --}}
        </div>

    </div>
</section>

@endsection