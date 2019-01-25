<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }
}
