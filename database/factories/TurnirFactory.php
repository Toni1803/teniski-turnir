<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TurnirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_turnira'=>$this->faker->randomElement($array = array ('Us Open','Australian Open','Miami','Monte Carlo','Tokio')),
            'vrijeme_odrzavanja'=>$this->faker->date,
            'vrsta_podloge'=>$this->faker->randomElement($array = array ('trava','zemlja','beton','tepih')),
            'lokacija'=>$this->faker->randomElement($array = array ('Melbourne','New York','Miami','Monte Carlo','Tokio')),
            'id_kategorije_turnira'=>$this->faker->numberBetween($min = 1, $max = 3),
            'id_rezultati'=>$this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
