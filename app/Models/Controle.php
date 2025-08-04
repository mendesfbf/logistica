<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Controle extends Model
{
    protected $fillable = ['pessoas_id',
                            'salas_id',
                            'projetores_id',
                            'notebooks_id',
                            'extensao',
                            'adaptador',
                            'hdmi',
                            'kit_apagador',
                            'status',
                            'responsavel',
                        ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function salas()
    {
        return $this->belongsTo(Sala::class);
    }
    
    public function notebooks()
    {
        return $this->belongsTo(Notebook::class);
    }

    public function projetores()
    {
        return $this->belongsTo(Projetore::class);
    }
}


