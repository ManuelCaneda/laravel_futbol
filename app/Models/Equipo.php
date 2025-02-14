<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    public $timestamps = false;

    public function equipo()
    {
        return $this->belongsToMany(Torneo::class);
    }
}
