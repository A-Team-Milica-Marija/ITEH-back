<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv'=>($broj=rand(1,6))==1?
            "Komedija":($broj==2?
            "Drama":($broj==3?
            "Horor":($broj==4?
            "Istorijski":($broj==5?
            "Naucna fantastika":"Dokumentarni")))),
            'opis'=>"Opis ".rand(1,1000000)
        ];
    }
}
