<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    protected $fillable = ['resultado1', 'resultado2', 'resultado3', 'resultado4','resultado5', 'resultado6', 'resultado7', 'resultado8','resultado9', 'resultado10', 'resultado11', 'resultado12','resultado13', 'resultado14', 'resultado15', 'resultado16'];

    public function apuestas(){
        return $this->hasMany(Apuesta::class, 'id');
    }
}
