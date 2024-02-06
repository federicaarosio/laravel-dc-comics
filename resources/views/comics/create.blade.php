@extends('layouts.app')

@section('main-content')
<section class="comics">

    <div class="comics-container">

        <span class="tag">
           Add a new Comic
        </span>

        <div class="article-container">

            <form action="">

                {{-- Questo sarà il form --}}
                
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Title:
                    </label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

            </form>

        </div>

        <div class="button-wrapper">
            <button>
                Load more
            </button> 
        </div>

    </div>
</section>

@endsection