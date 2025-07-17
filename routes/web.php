<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use App\Models\Pokemon;
use App\Http\Controllers\PokemonController;

/**
 * Show Pokémon Dashboard with optional search filters.
 */
Route::get('/', function (Request $request) {
    Log::info("GET / with search", $request->all());

    $startTime = microtime(true);

    // Build query with optional filters
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

    // Optional cache with unique key for each search
    $cacheKey = 'pokemons_' . md5(json_encode($request->all()));

    if (Cache::has($cacheKey)) {
        $data = Cache::get($cacheKey);
    } else {
        $data = $query->orderBy('created_at', 'asc')->get();
        Cache::put($cacheKey, $data, now()->addMinutes(5));
    }

    return view('pokemons', [
        'pokemons' => $data,
        'elapsed' => microtime(true) - $startTime,
    ]);
});
