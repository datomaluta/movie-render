<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Str;

class MovieController extends Controller
{
	public function index(Movie $movie)
	{
		$quotes = $movie->quotes;
		return view('movie.index', ['movie'=>$movie, 'quotes'=>$quotes]);
	}
}
