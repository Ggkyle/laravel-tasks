<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokémon Search</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 20px;
        }
        .filter-form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .filter-form input, .filter-form select {
            margin: 8px;
            padding: 6px 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }
        th {
            background: #f7f7f7;
        }
        img.pokemon-img {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }
    </style>
</head>
<body>

    <h1>Pokémon Search</h1>

    <form method="GET" action="/" class="filter-form">
        <input type="text" name="name" placeholder="Name" value="{{ request('name') }}">

        <select name="element">
            <option value="">Any Element</option>
            <option value="Land" {{ request('element') == 'Land' ? 'selected' : '' }}>Land</option>
            <option value="Water" {{ request('element') == 'Water' ? 'selected' : '' }}>Water</option>
            <option value="Air" {{ request('element') == 'Air' ? 'selected' : '' }}>Air</option>
        </select>

        <select name="type">
            <option value="">Any Type</option>
            <option value="Fire" {{ request('type') == 'Fire' ? 'selected' : '' }}>Fire</option>
            <option value="Water" {{ request('type') == 'Water' ? 'selected' : '' }}>Water</option>
            <option value="Electric" {{ request('type') == 'Electric' ? 'selected' : '' }}>Electric</option>
            <option value="Grass" {{ request('type') == 'Grass' ? 'selected' : '' }}>Grass</option>
            <option value="Psychic" {{ request('type') == 'Psychic' ? 'selected' : '' }}>Psychic</option>
        </select>

        <select name="rarity">
            <option value="">Any Rarity</option>
            <option value="Common" {{ request('rarity') == 'Common' ? 'selected' : '' }}>Common</option>
            <option value="Rare" {{ request('rarity') == 'Rare' ? 'selected' : '' }}>Rare</option>
            <option value="Legendary" {{ request('rarity') == 'Legendary' ? 'selected' : '' }}>Legendary</option>
        </select>

        <input type="number" name="level" placeholder="Level" value="{{ request('level') }}" min="1">
        <input type="number" name="min_hp" placeholder="Min HP" value="{{ request('min_hp') }}">
        <input type="number" name="max_hp" placeholder="Max HP" value="{{ request('max_hp') }}">
        <input type="number" name="min_attack" placeholder="Min Attack" value="{{ request('min_attack') }}">
        <input type="number" name="max_attack" placeholder="Max Attack" value="{{ request('max_attack') }}">

        <button type="submit">Search</button>
    </form>

    @if(count($pokemons))
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Element</th>
                    <th>Type</th>
                    <th>Rarity</th>
                    <th>Level</th>
                    <th>HP</th>
                    <th>Attack</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pokemons as $pokemon)
                    <tr>
                        <td>
                            @if($pokemon->image)
                                <img src="{{ asset('images/pokemons/' . $pokemon->image) }}" alt="{{ $pokemon->name }}" class="pokemon-img">
                                @else
                                <span>N/A</span>
                            @endif
                        </td>
                        <td>{{ $pokemon->name }}</td>
                        <td>{{ $pokemon->element }}</td>
                        <td>{{ $pokemon->type }}</td>
                        <td>{{ $pokemon->rarity }}</td>
                        <td>{{ $pokemon->level }}</td>
                        <td>{{ $pokemon->hp }}</td>
                        <td>{{ $pokemon->attack }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p><small>Found {{ count($pokemons) }} Pokémon in {{ number_format($elapsed, 4) }}s</small></p>
    @else
        <p>No Pokémon found for your search.</p>
    @endif

</body>
</html>
