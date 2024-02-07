@extends('layouts.app')

@section('main-content')
<section class="comics">

    <div class="comics-container">

        <span class="tag">
           Edit a Comic
        </span>

        <div class="article-container">

            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf

                {{-- custom method--}}
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label text-white">
                        Title:
                    </label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old( 'title' ,$comic->title) }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label text-white">
                        Description:
                    </label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old( 'description' ,$comic->description) }}">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label text-white">
                        Thumb url:
                    </label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{ old( 'thumb' ,$comic->thumb) }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label text-white">
                        Price:
                    </label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old( 'price' ,$comic->price) }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label text-white">
                        Series:
                    </label>
                    <input type="text" name="series" id="series" class="form-control" value="{{ old( 'series' ,$comic->series) }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label text-white">
                        Sale date:
                    </label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ old( 'sale_date' ,$comic->sale_date) }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label text-white">
                        Type:
                    </label>
                    <input type="text" name="type" id="type" class="form-control" value="{{ old( 'type' ,$comic->type) }}">
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="add-btn">
                        Edit comic
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