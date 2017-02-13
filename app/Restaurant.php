<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable =
    [
    	'nombre',
    	'tipo_restaurante',
    	'especialidad',
    	'direccion',
    	'ciudad_municipio',
    	'telefono',
    	'valoracion'
    ];

    public function dishes(){
    	return $this->belongsto('App\Dish');
    }
}
