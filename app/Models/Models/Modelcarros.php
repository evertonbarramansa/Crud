<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelcarros extends Model
{
    //use HasFactory;
    protected $table='carros';
    protected $fillable=['modelo','ano_lancamento','valor','id_user'];
 
    public function relUsers()
     {
         return $this->hasOne ('App\Models\User','id','id_user');

    }
}