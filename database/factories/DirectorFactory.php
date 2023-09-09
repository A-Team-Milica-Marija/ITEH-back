<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->name(),
            'godinaRodjenja' => rand(1965,1985),
            'mestoRodjenja'=> (($brFilma=rand(1,15))==1?
            "Beograd":($brFilma==2?
            "London":($brFilma==3?
            "New York":($brFilma==4?
            "Paris":($brFilma==5?
            "Los Angeles":"Copenhagen"))))),
        ];
    }
}
