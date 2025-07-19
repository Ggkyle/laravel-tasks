<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons'; // <- fix here

    protected $fillable = [
        'name',
        'description',
        'element',
        'type',
        'level',
        'rarity',
        'hp',
        'attack',
        'image',
    ];
}
