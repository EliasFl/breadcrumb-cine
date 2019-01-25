<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        
        return view('genres.index', compact('genres'));
    }

    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }
}
