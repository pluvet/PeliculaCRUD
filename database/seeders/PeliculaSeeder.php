<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelicula = new Pelicula();

        $pelicula->titulo = 'heathers';
        $pelicula->genero = 'comedia juvenil';
        $pelicula->save();

        $pelicula1 = new Pelicula();

        $pelicula1->titulo = 'json';
        $pelicula1->genero = 'terror';
        $pelicula1->save();

        $pelicula2 = new Pelicula();

        $pelicula2->titulo = 'pulp fiction';
        $pelicula2->genero = 'accion';
        $pelicula2->save();
    }
}
