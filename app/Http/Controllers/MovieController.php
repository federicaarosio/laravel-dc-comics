<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => ['required', 'unique:movies' ,'max:255'],
                'description' => ['required'],
                'src' => ['required', 'url:http,https'],
                'director' => ['required'],
            ]);

         $formData = $request->all();
         $newMovie = Movie::create($formData);

         return redirect()->route('movies.show', $newMovie->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate(
            [
                'title' => ['required', 'max:255', Rule::unique('movies')->ignore($movie->id)],
                'description' => ['required'],
                'src' => ['required', 'url:http,https'],
                'director' => ['required'],
            ]);

        $data = $request->all();

        $movie->update($data);

        return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
