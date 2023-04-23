<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		Movie::create([
			'name' => [
				'en' => 'Hot Dog',
				'ka' => 'ცხელი ძაღლი',
			],
			'slug'=> 'hot-dog',
		]);

		Movie::create([
			'name' => [
				'en' => 'Sherekilebi',
				'ka' => 'შერეკილები',
			],
			'slug'=> 'sherekilebi',
		]);

		Movie::create([
			'name' => [
				'en' => 'An Extraordinary Exhibition',
				'ka' => 'არაჩვეულებრივი გამოფენა',
			],
			'slug'=> 'an-extraordinary-exshibition',
		]);

		Movie::create([
			'name' => [
				'en' => 'Blue Mountains',
				'ka' => 'ცისფერი მთები',
			],
			'slug'=> 'blue-mountains',
		]);

		$this->faker = Faker::create();

		Quote::create([
			'movie_id' => '1',
			'thumbnail'=> $this->faker->imageUrl(640, 480, 'movies', true),
			'text'     => [
				'en' => 'Remember bro, a woman is not a human being',
				'ka' => 'ძმაკაც, დაიმახსოვრე, ქალი ადამიანი არ არის',
			],
		]);

		Quote::create([
			'movie_id' => '1',
			'thumbnail'=> $this->faker->imageUrl(640, 480, 'movies', true),
			'text'     => 'You will add 100 on top of this 50 and bring it to me tomorrow.',
			'text'     => [
				'en' => 'You will add 100 on top of this 50 and bring it to me tomorrow',
				'ka' => 'ამ 100 ლარს ზემოდან 50-ს დაამატებ და ხვალ სახლში ამომიცუნცულებ',
			],
		]);

		Quote::create([
			'movie_id' => '2',
			'thumbnail'=> $this->faker->imageUrl(640, 480, 'movies', true),
			'text'     => 'I told you they will fly away, you butterfly with a tie.',
			'text'     => [
				'en' => 'I told you they will fly away, you butterfly with a tie',
				'ka' => 'ხომ გითხარი გაფრინდებიან მეთქი, შე გალსტუკიანო პეპელა',
			],
		]);

		Quote::create([
			'movie_id' => '2',
			'thumbnail'=> $this->faker->imageUrl(640, 480, 'movies', true),
			'text'     => [
				'en' => 'If you are going to a good cause, take me too',
				'ka' => 'თუ კაი საქმეზე მიდიხართ, მეც წამიყვანეთ',
			],
		]);
	}
}
