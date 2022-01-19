<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Kategorija_turniraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategorija'=>$this->faker->randomElement($array = array ('Grand slam','Masters','Challenger','Atp 250','Atp 500')),
        ];
    }
}
