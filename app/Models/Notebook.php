<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = [
        'numero',
        'modelo',    
    ];

    public function controle()
    {
        return $this->hasMany(Controle::class);
    }
}
