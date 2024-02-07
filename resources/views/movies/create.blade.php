@extends('layouts.app')

@section('main-content')
<section class="comics">

    <div class="comics-container">


        <span class="tag">
           Add a new Movie
        </span>


        <div class="article-container">

            <div class="container py-2">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <form action=" {{ route('movies.store') }} " method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="title" class="form-label text-white">
                        Title:
                    </label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old( 'title') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label text-white">
                        Description:
                    </label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old( 'description') }}">
                </div>

                <div class="mb-3">
                    <label for="src" class="form-label text-white">
                        Poster url:
                    </label>
                    <input type="text" name="src" id="src" class="form-control" value="{{ old( 'src') }}">
                </div>

                <div class="mb-3">
                    <label for="director" class="form-label text-white">
                        Director:
                    </label>
                    <input type="text" name="director" id="director" class="form-control" value="{{ old( 'director') }}">
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="add-btn">
                        Add a new movie
                    </button> 
                    <button type="reset"  class="reset-btn">
                        Reset
                    </button>
                </div>

            </form>

        </div>



    </div>
</section>

@endsection