@extends('layouts.app')

@section('main-content')
<section class="comics">

    <div class="comics-container">

        <span class="tag">
            Current series
        </span>

        <div class="article-container">

                <article>
                    <img src="{{ $comic['thumb'] }}" alt="comic thumb" class="comic-thumb">
                    <p>{{ $comic['series'] }}</p>
                </article>

        </div>

        <div class="button-wrapper">
            <button>
                Load more
            </button> 
        </div>

    </div>
</section>

@endsection