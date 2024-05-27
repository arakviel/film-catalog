<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Genre>
 */
class GenreFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->unique()->word;
        $slug = Str::slug($name);

        return [
            'slug' => $slug,
            'name' => $name,
            'description' => fake()->sentence,
            'image' => fake()->imageUrl(640, 480, 'genres'), // генерує випадкове зображення
        ];
    }
}
