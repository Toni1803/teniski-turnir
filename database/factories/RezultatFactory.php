<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RezultatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pobjednik'=>$this->faker->name,
            'broj_odigranih_setova'=>$this->faker->numberBetween($min = 2, $max = 5),
        ];
    }
}
