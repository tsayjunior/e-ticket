<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = "eventos";
    protected $guarded=[];

    //relación uno a muchos (invertido)
    public function categoria(){
        return $this->belongsTo('App\Models\categoria');
    }

    //relación uno a muchos
    public function contactoEventos(){
        return $this->hasMany('App\Models\ContactoEvento');
    }
}
