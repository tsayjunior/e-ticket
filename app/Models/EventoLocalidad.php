<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoLocalidad extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    protected $table = "evento_localidad";

    //relación uno a muchos con horario
    public function horarios(){
        return $this->hasMany('App\Models\Horario');
    }
}
