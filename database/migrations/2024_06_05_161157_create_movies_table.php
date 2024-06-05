<?php

use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug', 128)->unique();
            $table->string('title', 128);
            $table->string('description', 512);
            $table->string('poster', 2048);
            $table->foreignIdFor(User::class)->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('genre_movie', function (Blueprint $table) {
            $table->foreignIdFor(Movie::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Genre::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['movie_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_genre');
        Schema::dropIfExists('movies');
    }
};
