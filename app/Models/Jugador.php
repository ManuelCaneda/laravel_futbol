<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = "jugadores";

    public $timestamps = false;

    public function equipos()
    {
        return $this->belongsTo(Equipo::class);
    }
}
