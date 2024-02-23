<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
   

    /**
     * Display the specified resource.
     */

 
     
       public function index()
    {
        $movies = Movie::take(4)->get();
        $topRatedMovies = Movie::orderByDesc('rating')->take(8)->get();
        $genre = Genre::findOrFail(4);
        $genres = Genre::all();
        $tvSeries = $genre->movies()->take(4)->get();
        return view("welcome", compact('movies', 'topRatedMovies', 'tvSeries','genres'));
    }

    public function search()
    {
        $query = Movie::query();
        $topRatedMovies = Movie::orderByDesc('rating')->take(8)->get();
        $genre = Genre::findOrFail(4);
        $genres = Genre::all();
        $tvSeries = $genre->movies()->take(4)->get();
        if ($search = request('search')) {
            $query->where('name', 'like', '%'. $search . '%');
        }
        $movies = $query->get();
        return view("welcome", compact('movies','topRatedMovies', 'tvSeries','genres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function show(string $slug)
    {
        $movie = Movie::where('slug', $slug)->firstOrFail();
        $genre = Genre::findOrFail(4);
        $tvSeries = $genre->movies()->take(4)->get();
    
        return view('movie.show', compact('movie', 'tvSeries'));
    }
   
    public function destroy(string $id)
    {
        //
    }
}
