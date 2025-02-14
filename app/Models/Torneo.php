<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Torneo extends Model
{
    public $timestamps = false;

    public function torneo()
    {
        return $this->hasMany(Equipo::class);
    }
}
