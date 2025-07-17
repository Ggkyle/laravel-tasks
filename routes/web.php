<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use App\Models\Pokemon;

Route::get('/', function (Request $request) {
    Log::info("GET / with search", $request->all());

    $startTime = microtime(true);

    $query = Pokemon::query();

    // Search filters
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

    // Cache by unique request
    $cacheKey = 'pokemons_' . md5(json_encode($request->all()));
    $pokemons = Cache::remember($cacheKey, now()->addMinutes(5), function () use ($query) {
        return $query->orderBy('created_at', 'asc')->get();
    });

    return view('pokemons', [
        'pokemons' => $pokemons,
        'elapsed' => microtime(true) - $startTime,
    ]);
});
