<?php

use Illuminate\Database\Seeder;
use App\Genre;
use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $genres = factory(Genre::class, 10)->create();

        $genres->each(function ($genre) {
            factory(Movie::class, 5)->create([
                'genre_id' => $genre->id
            ]);
        });
    }
}
