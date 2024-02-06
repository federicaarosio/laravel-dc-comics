<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = config('movies.movie');

        foreach($movies as $movie) {
            $newMovie = new Movie();
            $newMovie->title = $movie['title'];
            $newMovie->description = $movie['description'];
            $newMovie->src = $movie['src'];
            $newMovie->director = $movie['director'];
            $newMovie->save();

        }


    }
}
