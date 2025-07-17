<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('pokemons', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('element'); // Land, Air, Water
        $table->string('type');    // Fire, Psychic, Grass, etc.
        $table->integer('level');
        $table->string('rarity');  // Common, Rare, Epic, Legendary
        $table->integer('hp');     // Hit Points
        $table->integer('attack'); // Attack Points
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
