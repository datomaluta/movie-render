<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMovieRequest extends FormRequest
{
	public function rules()
	{
		return [
			'name_en'    => ['required', Rule::unique('movies', 'name')->ignore(request()->route('movie')->id)],
			'name_ka'    => ['required', Rule::unique('movies', 'name')->ignore(request()->route('movie')->id)],
			'slug'       => ['required', Rule::unique('movies', 'slug')->ignore(request()->route('movie')->id)],
		];
	}
}
