<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_igrac'=>$this->faker->numberBetween($min = 1, $max = 3),
            'id_turniri'=>$this->faker->numberBetween($min = 1, $max = 3),
            'runda'=>$this->faker->randomElement($array = array ('četvrtfinale','1.kolo','2.kolo','polufinale','finale')),
            'rezultat'=>$this->faker->randomElement($array = array ('6:2 7:5','7:5 7:6','6:1 6:1','6:3 6:4','6:4 7:5')),
        ];
    }
}
