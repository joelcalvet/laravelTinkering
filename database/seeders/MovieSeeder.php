<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Movie::create([
            'title' => 'The Shawshank Redemption',
            'description' => 'Two imprisoned men bond over a number of years...',
            'year' => 1994,
            'genre' => 'Drama',
            'available' => true,
        ]);

        Movie::create([
            'title' => 'The Godfather',
            'description' => 'The aging patriarch of an organized crime dynasty...',
            'year' => 1972,
            'genre' => 'Crime',
            'available' => true,
        ]);
    }
}
