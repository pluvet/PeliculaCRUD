<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use App\Models\Review;
use Database\Factories\PeliculaFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        //Pelicula::factory(10)->create();
        //Review::factory(20)->create();

        $this->call(PeliculaSeeder::class);
    }
}
