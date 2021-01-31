<?php

namespace Database\Factories;

use App\Models\Pelicula;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pelicula_id' => $this->faker->numberBetween(1, Pelicula::count()),
            'calificacion' => $this->faker->numberBetween(1, 10),
            'revision' => $this->faker->company,
            'username' => $this->faker->unique()->firstName
        ];
    }
}
