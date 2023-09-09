<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $fillable = [
        'pocetakProjekcije',
        'cena'
    ];

    public function film(){
        return $this->hasOne(Film::class,'id','film_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
