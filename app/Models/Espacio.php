<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;
    protected $guarded=[];

    //relación uno a muchos (invertido) con area
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }
}
