<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IgraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_turniri'=>$this->faker->numberBetween($min = 1, $max = 3),
            'id_igraci'=>$this->faker->numberBetween($min = 1, $max = 3),
            'kada'=>$this->faker->date,
        ];
    }
}
