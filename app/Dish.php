<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable =
    [
    	'nombre','precio','tiempo_orden'
    ];

    public function restaurant(){
    	return $this->belongsto('App\Restaurant');
    }
}
