<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    use HasFactory;
    protected $fillable = ['apuesta1', 'apuesta2', 'apuesta3', 'apuesta4','apuesta5', 'apuesta6', 'apuesta7', 'apuesta8','apuesta9', 'apuesta10', 'apuesta11', 'apuesta12','apuesta13', 'apuesta14', 'apuesta15', 'apuesta16'];

    public function resultados(){
        return $this->belongsTo(Resultado::class, 'id_resultado');
    }
}
