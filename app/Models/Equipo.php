<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equipo extends Model
{

    public $timestamps = false;

    public function torneos():BelongsToMany
    {
        return $this->belongsToMany(Torneo::class);
    }

    public function jugadores()
    {
        return $this->hasMany(Jugador::class);
    }
}
