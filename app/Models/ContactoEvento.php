<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoEvento extends Model
{
    use HasFactory;
    protected $guarded=[];

    //relación uno a muchos (invertido)
    public function evento(){
        return $this->belongsTo('App\Models\evento');
    }
}
