<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    public function run(): void
    {
        $pokemons = [
            //  Common Pokémon
            ['name' => 'Bulbasaur', 'element' => 'Land', 'type' => 'Grass', 'rarity' => 'Common', 'level' => 5, 'hp' => 45, 'attack' => 49],
            ['name' => 'Squirtle', 'element' => 'Water', 'type' => 'Water', 'rarity' => 'Common', 'level' => 5, 'hp' => 44, 'attack' => 48],
            ['name' => 'Charmander', 'element' => 'Land', 'type' => 'Fire', 'rarity' => 'Common', 'level' => 5, 'hp' => 39, 'attack' => 52],
            ['name' => 'Pidgey', 'element' => 'Air', 'type' => 'Flying', 'rarity' => 'Common', 'level' => 3, 'hp' => 40, 'attack' => 45],
            ['name' => 'Rattata', 'element' => 'Land', 'type' => 'Normal', 'rarity' => 'Common', 'level' => 2, 'hp' => 30, 'attack' => 56],
            ['name' => 'Geodude', 'element' => 'Land', 'type' => 'Rock', 'rarity' => 'Common', 'level' => 7, 'hp' => 50, 'attack' => 80],
            ['name' => 'Magikarp', 'element' => 'Water', 'type' => 'Water', 'rarity' => 'Common', 'level' => 2, 'hp' => 20, 'attack' => 10],
            ['name' => 'Zubat', 'element' => 'Air', 'type' => 'Poison', 'rarity' => 'Common', 'level' => 4, 'hp' => 40, 'attack' => 45],
            ['name' => 'Oddish', 'element' => 'Land', 'type' => 'Grass', 'rarity' => 'Common', 'level' => 6, 'hp' => 45, 'attack' => 50],
            ['name' => 'Psyduck', 'element' => 'Water', 'type' => 'Water', 'rarity' => 'Common', 'level' => 6, 'hp' => 50, 'attack' => 52],

            //  Legendary Pokémon
            ['name' => 'Mewtwo', 'element' => 'Land', 'type' => 'Psychic', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 106, 'attack' => 110],
            ['name' => 'Zapdos', 'element' => 'Air', 'type' => 'Electric', 'rarity' => 'Legendary', 'level' => 50, 'hp' => 90, 'attack' => 90],
            ['name' => 'Articuno', 'element' => 'Air', 'type' => 'Ice', 'rarity' => 'Legendary', 'level' => 50, 'hp' => 90, 'attack' => 85],
            ['name' => 'Moltres', 'element' => 'Air', 'type' => 'Fire', 'rarity' => 'Legendary', 'level' => 50, 'hp' => 90, 'attack' => 100],
            ['name' => 'Rayquaza', 'element' => 'Air', 'type' => 'Dragon', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 105, 'attack' => 120],
            ['name' => 'Groudon', 'element' => 'Land', 'type' => 'Ground', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 100, 'attack' => 150],
            ['name' => 'Kyogre', 'element' => 'Water', 'type' => 'Water', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 100, 'attack' => 120],
            ['name' => 'Lugia', 'element' => 'Air', 'type' => 'Psychic', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 106, 'attack' => 90],
            ['name' => 'Ho-Oh', 'element' => 'Air', 'type' => 'Fire', 'rarity' => 'Legendary', 'level' => 70, 'hp' => 106, 'attack' => 130],
            ['name' => 'Celebi', 'element' => 'Land', 'type' => 'Psychic', 'rarity' => 'Legendary', 'level' => 50, 'hp' => 100, 'attack' => 100],
        ];

        foreach ($pokemons as $poke) {
            Pokemon::create($poke);
        }
    }
}
