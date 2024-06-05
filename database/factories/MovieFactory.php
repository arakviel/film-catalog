<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->word;
        $slug = Str::slug($title);

        return [
            'slug' => $slug,
            'title' => $title,
            'description' => fake()->sentence,
            'poster' => fake()->imageUrl(640, 480, 'фільм'),
            'user_id' => User::query()->inRandomOrder()->first()->id
        ];
    }
}
