<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'reziser',
        'radnja',
        'pocetakProjekcije'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function director(){
        return $this->belongsTo(Director::class);
    }

    public function ticket(){
        return $this->belongsTo(Tickets::class,'film_id');
    }
}
