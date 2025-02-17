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
        Schema::table('equipo_torneo', function (Blueprint $table) {
            $table->renameColumn("id_equipo","equipo_id");
            $table->renameColumn("id_torneo","torneo_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipo_torneo', function (Blueprint $table) {
            $table->renameColumn("equipo_id","id_equipo");
            $table->renameColumn("torneo_id","id_torneo");
        });
    }
};
