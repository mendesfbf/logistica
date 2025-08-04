<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = [
        'chave',
        'descricao',
    ];

    public function controles()
    {
        return $this->hasMany(Controles::class);
    }
}
