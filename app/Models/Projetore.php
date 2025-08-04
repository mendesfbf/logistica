<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projetore extends Model
{
    
    protected $fillable = [
        'numero',
        'modelo',
        
    ];

    public function controles()
    {
        return $this->hasMany(Controles::class);
    }
}
