<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieFrame;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $this->call([
            GenreSeeder::class,
            MovieSeeder::class,
            MovieFrameSeeder::class,
        ]);

        // Отримання всіх жанрів та фільмів
        $genres = Genre::all();
        $movies = Movie::all();

        // Додавання до кожного фільму по 5 випадкових жанрів
        foreach ($movies as $movie) {
            // Випадковий набір з 5 жанрів
            $randomGenres = $genres->random(5);

            // Прикріплення жанрів до фільму
            $movie->genres()->attach($randomGenres);
        }
    }
}
