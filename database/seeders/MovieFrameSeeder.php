<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\MovieFrame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieFrameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MovieFrame::factory(50)->create();
    }
}
