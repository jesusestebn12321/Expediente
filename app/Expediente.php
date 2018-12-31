<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model{
    //
    protected $table='expedientes';
    protected $fillable = ['id','code','imgDemandado','imagen_partida_id','imagen_dni_id','imagen_document_id','type_reason_id','demandado_user_id','demandante_user_id'];

    public function partida(){
    	return  $this->belongsTo('\App\ImagenPartida','imagen_partida_id');
    }
    
    public function imgDni(){
    	return  $this->belongsTo('\App\ImagenDni','imagen_dni_id');
    }
    
    public function imgDocument(){
    	return  $this->belongsTo('\App\ImagenDocument','imagen_document_id');
    }
    
    public function typeReason(){
    	return  $this->belongsTo('\App\type_reason','type_reason_id');
    }

    
    public function demandante(){
    	return  $this->belongsTo('\App\User','demandante_user_id');
    }

    public function demandado(){
    	return  $this->belongsTo('\App\User','demandado_user_id');
    }
}
