<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug', 128)->unique();
            $table->string('name', 128)->unique();
            $table->string('description', 278);
            $table->string('image', 2048)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
