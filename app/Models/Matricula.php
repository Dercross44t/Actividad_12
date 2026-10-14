<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    public $incrementing = true;
    public $timestamps = true;
   protected $fillable = ['grupo_id', 'estudiante_id', "fecha", "notaFinal"];

   protected function cast() : array
   {
    return ['fecha' => 'date', 'notaFinal' => 'decimal:2'];
   }
}
