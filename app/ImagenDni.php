<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenDni extends Model{
    protected $table='imagen_dnis';
    protected $fillable = ['id','imagen'];

    public function imageDniDemandante(){
    	return  $this->belongsTo('\App\Expediente','imagen_dni_demandante_id');
    }
    public function imageDniDemandado(){
    	return  $this->belongsTo('\App\Expediente','imagen_dni_demandado_id');
    }

}
