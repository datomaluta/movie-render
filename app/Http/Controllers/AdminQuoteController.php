<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('admin.quotes.index', ['quotes'=>Quote::latest()->paginate(9)]);
	}

	public function create()
	{
		return view('admin.quotes.create', ['movies'=>Movie::all()]);
	}

	public function store(StoreQuoteRequest $request)
	{
		$attributes = $request->validated();
		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

		Quote::create([
			'text' => [
				'en' => $attributes['text_en'],
				'ka' => $attributes['text_ka'],
			],
			'thumbnail'=> $attributes['thumbnail'],
			'movie_id' => $attributes['movie_id'],
		]);

		return redirect(route('admin.quotes.index'));
	}

	public function edit(Quote $quote)
	{
		return view('admin.quotes.edit', ['quote'=>$quote, 'movies'=>Movie::all()]);
	}

	public function update(Quote $quote, StoreQuoteRequest $request)
	{
		$attributes = $request->validated();

		if (isset($attributes['thumbnail']))
		{
			$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
			$quote->update([
				'text' => [
					'en' => $attributes['text_en'],
					'ka' => $attributes['text_ka'],
				],
				'thumbnail'=> $attributes['thumbnail'],
				'movie_id' => $attributes['movie_id'],
			]);
		}
		else
		{
			$quote->update([
				'text' => [
					'en' => $attributes['text_en'],
					'ka' => $attributes['text_ka'],
				],
				'movie_id' => $attributes['movie_id'],
			]);
		}

		return redirect(route('admin.quotes.index'));
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();

		return redirect(route('admin.quotes.index'));
	}
}
