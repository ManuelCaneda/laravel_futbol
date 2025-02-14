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
        Schema::create('equipo_jugador', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("id_equipo");
            $table->unsignedBigInteger("id_jugador")->unique();
            $table->foreign("id_equipo")->references("id")->on("equipos");
            $table->foreign("id_jugador")->references("id")->on("jugadores");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipo_jugador');
    }
};
