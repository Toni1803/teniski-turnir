<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IgracFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'ime'=>$this->faker->firstNameMale,
            'prezime'=>$this->faker->lastName,
            'datum_rođenja'=>$this->faker->date,
            'pozicija'=>$this->faker->numberBetween($min = 3, $max = 50),
            'spol'=>$this->faker->randomElement($array = array ('M')),
            'drzava'=>$this->faker->country,
        ];
    }
}
