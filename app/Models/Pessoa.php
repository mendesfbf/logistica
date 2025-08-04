<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'funcional',
        'nome',
        'cargo',
    ];

    public function controles()
    {
        return $this->hasMany(Controles::class);
    }
}
