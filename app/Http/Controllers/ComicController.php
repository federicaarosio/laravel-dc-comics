<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => ['required', 'unique:comics', 'max:255'],
                'description' => ['required'],
                'thumb' => ['required', 'url:http,https'],
                'price' => ['required'],
                'series' => ['required', 'max:255' ],
                'sale_date' => ['required', 'max:60'],
                'type' => ['required', 'max:60'],
            ], [
                'title.required' => 'Please remember that "title" is required and must be less than 255 characters. Must be unique too.'
            ]);

        // dd($request-> all());
        $formData = $request->all();

        // $newComic = new Comic();
        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->type = $formData['type'];
        $newComic = Comic::create($formData);

        // dd($newComic);
        // $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate(
            [
                'title' => ['required', 'max:255', Rule::unique('comics')->ignore($comic->id)],
                'description' => ['required'],
                'thumb' => ['required', 'url:http,https'],
                'price' => ['required'],
                'series' => ['required', 'max:255' ],
                'sale_date' => ['required', 'max:60'],
                'type' => ['required', 'max:60'],
            ], [
                'title.required' => 'Please remember that "title" is required and must be less than 255 characters. Must be unique too'
            ]);

        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
