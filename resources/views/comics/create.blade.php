@extends('layouts.app')

@section('main-content')
<section class="comics">

    <div class="comics-container">

        <span class="tag">
           Add a new Comic
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

            <form action=" {{ route('comics.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="title" class="form-label text-white">
                        Title:
                    </label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label text-white">
                        Description:
                    </label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label text-white">
                        Thumb url:
                    </label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{ old('thumb') }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label text-white">
                        Price:
                    </label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label text-white">
                        Series:
                    </label>
                    <input type="text" name="series" id="series" class="form-control" value="{{ old('series') }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label text-white">
                        Sale date:
                    </label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ old('sale_date') }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label text-white">
                        Type:
                    </label>
                    <input type="text" name="type" id="type" class="form-control" value="{{ old('type') }}">
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="add-btn">
                        Add a new comic
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