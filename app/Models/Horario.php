<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    //relación uno a muchos (invertido) con evento localidad
    public function eventoLocalidad(){
        return $this->belongsTo('App\Models\EventoLocalidad');
    }

    //relación uno a muchos con area
     public function areas(){
        return $this->hasMany('App\Models\Area');
    }
    
}
