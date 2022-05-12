<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $guarded=[];

    //relación uno a muchos (invertido) con horario
    public function horario(){
        return $this->belongsTo('App\Models\Horario');
    }

    //relación uno a muchos (invertido) con seccion
    public function seccion(){
        return $this->belongsTo('App\Models\Seccion');
    }

    //relación uno a muchos con espacio
    public function espacios(){
        return $this->hasMany('App\Models\Espacio');
    }
}
