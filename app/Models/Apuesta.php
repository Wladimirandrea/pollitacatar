<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    use HasFactory;

    public function resultados(){
        return $this->belongsTo(Resultado::class, 'id_resultado');
    }
}
