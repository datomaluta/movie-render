<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('admin.movies.index', ['movies'=>Movie::latest()->paginate(9)]);
	}

	public function store(StoreMovieRequest $request)
	{
		$attributes = $request->validated();

		Movie::create([
			'name' => [
				'en' => $attributes['name_en'],
				'ka' => $attributes['name_ka'],
			],
			'slug'=> $attributes['slug'],
		]);

		return redirect(route('admin.movies.index'));
	}

	public function edit(Movie $movie)
	{
		return view('admin.movies.edit', ['movie'=>$movie]);
	}

	public function update(Movie $movie, UpdateMovieRequest $request)
	{
		$attributes = $request->validated();

		$movie->update([
			'name' => [
				'en' => $attributes['name_en'],
				'ka' => $attributes['name_ka'],
			],
			'slug'=> $attributes['slug'],
		]);

		return redirect(route('admin.movies.index'));
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();

		return redirect(route('admin.movies.index'));
	}
}
