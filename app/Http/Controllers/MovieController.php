<?php

namespace App\Http\Controllers;

use App\Models\Movie;
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'required|string|max:100',
            'available' => 'required|boolean',
        ]);

        Movie::create($validated);

        return redirect()->route('movies.index')->with('success', 'Movie created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'required|string|max:100',
            'available' => 'required|boolean',
        ]);

        $movie->update($validated);

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully!');
    }
}
