<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carreras extends Model
{
    use HasFactory;

    public function alumnos():HasMany{
    return $this->hasMany(Alumno::class);

    }

    public function depto():BelongsTo{
        return $this->belongsTo(Depto::class);
    }

}
