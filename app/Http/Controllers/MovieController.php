<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Genre;
use App\Models\Movie;
use Str;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = "Test";
        $movies = Movie::query()->with(['genres', 'user'])->paginate(5);
        return view('movies.index', compact('movies', 'message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $request->validate([
            'title' => 'required|string|max:128',
            'description' => 'required|string|max:512',
            'poster' => 'required|url|max:2048',
            'genres' => 'required|array',
            'genres.*' => 'exists:genres,id',
        ]);

        $movie = Movie::create([
            'id' => Str::uuid(),
            'slug' => Str::slug($request->title, '-'),
            'title' => $request->title,
            'description' => $request->description,
            'poster' => $request->poster,
            'user_id' => auth()->id(),
        ]);

        $movie->genres()->attach($request->genres);

        return redirect()->route('movies.index')->with('success', 'Фільм додано');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
