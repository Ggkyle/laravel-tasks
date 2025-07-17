<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * Show the Pokémon list with optional filters (search-only).
     */
    public function index(Request $request)
    {
        $startTime = microtime(true);

        // Build query dynamically
        $query = Pokemon::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('element')) {
            $query->where('element', $request->element);
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('rarity')) {
            $query->where('rarity', $request->rarity);
        }

        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }

        if ($request->filled('min_hp')) {
            $query->where('hp', '>=', $request->min_hp);
        }

        if ($request->filled('max_hp')) {
            $query->where('hp', '<=', $request->max_hp);
        }

        // Optional cache key per search request
        $cacheKey = 'pokemon_search_' . md5(json_encode($request->all()));

        if (Cache::has($cacheKey)) {
            $pokemons = Cache::get($cacheKey);
        } else {
            $pokemons = $query->orderBy('created_at', 'asc')->get();
            Cache::put($cacheKey, $pokemons, now()->addMinutes(5));
        }

        return view('pokemons', [
            'pokemons' => $pokemons,
            'elapsed' => microtime(true) - $startTime,
        ]);
    }
}
