<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoLocalidad extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    //relación uno a muchos (invertido) con localidad
    public function localidad(){
        return $this->belongsTo('App\Models\Localidad');
    }
}
