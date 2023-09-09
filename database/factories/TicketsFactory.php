<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Film;
use App\Models\Ganre;
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            //'film_id'=>Film::factory(),
            'pocetakProjekcije'=>"".rand(18,23).":".(($broj=rand(0,59))>=0&&$broj<=9? "0":"").$broj.":00",
            'cena'=>rand(300,800)
        ];
    }
}
