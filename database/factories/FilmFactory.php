<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Director;
use App\Models\Genre;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*'naziv'=>(($brFilma=rand(1,15))==1?
            "Montevideo, Bog te video":($brFilma==2?
            "Titanic":($brFilma==3?
            "Home alone":($brFilma==4?
            "Spiderman":($brFilma==5?
            "Batman":($brFilma==6?
            "Maleficent":($brFilma==7?
            "Nerme":($brFilma==8?
            "Toma":($brFilma==9?
            "Lepa sela lepo gore":($brFilma==10?
            "Star Wars":($brFilma==11?
            "Hunger games":($brFilma==12?
            "Taxi blues":($brFilma==13?
            "Realna prica":($brFilma==14?
            "Tito i ja":"Montevideo, vidimo se")))))))))))))),*/

            'radnja'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'director_id'=>Director::factory(),
            //'genre_id'=>Genre::factory()
            
        ];
    }
}
