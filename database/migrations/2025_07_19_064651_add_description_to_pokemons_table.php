<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('pokemons', function (Blueprint $table) {
        $table->string('description')->nullable();
    });
}

public function down()
{
    Schema::table('pokemons', function (Blueprint $table) {
        $table->dropColumn('description');
    });
}
};
