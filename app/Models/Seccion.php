<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;
    protected $guarded=[];

    //relación uno a muchos con area
    public function areas(){
        return $this->hasMany('App\Models\Area');
    }
}
