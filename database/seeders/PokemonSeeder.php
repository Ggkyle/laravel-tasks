<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    public function run(): void
    {
        $pokemons = [
            ['name' => 'Bulbasaur', 'element' => 'Land', 'type' => 'Grass', 'rarity' => 'Common', 'level' => 5, 'hp' => 45, 'attack' => 49, 'image' => 'bulbasaur.png'],
            ['name' => 'Squirtle', 'element' => 'Water', 'type' => 'Water', 'rarity' => 'Common', 'level' => 5, 'hp' => 44, 'attack' => 48, 'image' => 'squirtle.png'],
            ['name' => 'Charmander', 'element' => 'Land', 'type' => 'Fire', 'rarity' => 'Common', 'level' => 5, 'hp' => 39, 'attack' => 52, 'image' => 'charmander.png'],
            ['name' => 'Pidgey', 'element' => 'Air', 'type' => 'Flying', 'rarity' => 'Common', 'level' => 3, 'hp' => 40, 'attack' => 45, 'image' => 'pidgey.png'],
            ['name' => 'Rattata', 'element' => 'Land', 'type' => 'Normal', 'rarity' => 'Common', 'level' => 2, 'hp' => 30, 'attack' => 56, 'image' => 'rattata.png'],
            ['name' => 'Geodude', 'element' => 'Land', 'type' => 'Rock', 'rarity' => 'Common', 'level' => 7, 'hp' => 50, 'attack' => 80, 'image' => 'geodude.png'],
            ['name' => 'Magikarp', 'element' => 'Water', 'type' => 'Water', 'rarity' => 'Common', 'level' => 2, 'hp' => 20, 'attack' => 10, 'image' => 'magikarp.png'],
            ['name' => 'Zubat', 'element' => 'Air', 'type' => 'Poison', 'rarity' => 'Common', 'level' => 4, 'hp' => 40, 'attack' => 45, 'image' => 'zubat.png'],
            ['name' => 'Oddish', 'element' => 'Land', 'type' => 'Grass', 'rarity' => 'Common', 'level' => 6, 'hp' => 45, 'attack' => 50, 'image' => 'oddish.png'],
            ['name' => 'Psyduck', 'element' => 'Water', 'type' => 'Water', 'rarity' => 'Common', 'level' => 6, 'hp' => 50, 'attack' => 52, 'image' => 'psyduck.png'],

            ['name' => 'Mewtwo', 'element' => 'Land', 'type' => 'Psychic', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 106, 'attack' => 110, 'image' => 'mewtwo.png'],
            ['name' => 'Zapdos', 'element' => 'Air', 'type' => 'Electric', 'rarity' => 'Legendary', 'level' => 50, 'hp' => 90, 'attack' => 90, 'image' => 'zapdos.png'],
            ['name' => 'Articuno', 'element' => 'Air', 'type' => 'Ice', 'rarity' => 'Legendary', 'level' => 50, 'hp' => 90, 'attack' => 85, 'image' => 'articuno.png'],
            ['name' => 'Moltres', 'element' => 'Air', 'type' => 'Fire', 'rarity' => 'Legendary', 'level' => 50, 'hp' => 90, 'attack' => 100, 'image' => 'moltres.png'],
            ['name' => 'Rayquaza', 'element' => 'Air', 'type' => 'Dragon', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 105, 'attack' => 120, 'image' => 'rayquaza.png'],
            ['name' => 'Groudon', 'element' => 'Land', 'type' => 'Ground', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 100, 'attack' => 150, 'image' => 'groudon.png'],
            ['name' => 'Kyogre', 'element' => 'Water', 'type' => 'Water', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 100, 'attack' => 120, 'image' => 'kyogre.png'],
            ['name' => 'Lugia', 'element' => 'Air', 'type' => 'Psychic', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 106, 'attack' => 90, 'image' => 'lugia.png'],
            ['name' => 'Ho-Oh', 'element' => 'Air', 'type' => 'Fire', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 106, 'attack' => 130, 'image' => 'hooh.png'],
            ['name' => 'Celebi', 'element' => 'Land', 'type' => 'Psychic', 'rarity' => 'Legendary', 'level' => 50, 'hp' => 100, 'attack' => 100, 'image' => 'celebi.png'],
        ];

        foreach ($pokemons as $poke) {
            Pokemon::create($poke);
        }
    }
}
