@extends('layouts.app')

@section('main-content')

<section class="movies">

    <div class="comics-container container">

        <h1 class="tag">
            Movies
        </h1>

        <div class="article-container d-flex justify-content-between flex-wrap">
            @foreach ($movies as $movie)
            <article class="card" style="width: 18rem;">
                <img src="{{ $movie['src'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie['title'] }}</h5>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</section>

@endsection