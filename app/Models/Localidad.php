<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;
    protected $guarded=[];

    //relacion muchos a muchos
    public function eventos(){
        return $this->belongsToMany('App\Models\Evento');
    }

    //relación uno a muchos con contacto localidad
    public function contactoLocalidads(){
        return $this->hasMany('App\Models\ContactoLocalidad');
    }
}
