<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = "categorias";

    //relación uno a muchos
    public function eventos(){
        return $this->hasMany('App\Models\evento');
    }
}
