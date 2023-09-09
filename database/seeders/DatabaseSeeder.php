<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tickets;
use App\Models\User;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Director;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $genre1=Genre::factory()->create([
            'naziv'=>"Drama"
        ]);
        $film1=Film::factory()->create([
            'naziv'=>"Titanic",
            'genre_id'=>$genre1
        ]);
        $karte1=Tickets::factory(20)->create([
            'film_id'=>$film1
        ]);
        $film2=Film::factory()->create([
            'naziv'=>"Spiderman",
            'genre_id'=>Genre::factory()->create([
                'naziv'=>"Naucna fantastika"
            ])
        ]);
        $karte2=Tickets::factory(20)->create([
            'film_id'=>$film2
        ]);
        $karte3=Tickets::factory(20)->create([
            'film_id'=>Film::factory()->create([
                'naziv'=>"Montevideo, Bog te video",
                'genre_id'=>$genre1
            ])
        ]);
    }
}
