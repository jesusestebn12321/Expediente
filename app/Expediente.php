<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model{
    //
    protected $table='expedientes';
    protected $fillable = ['id','code','imgDemandado','imagen_partida_id','imagen_dni_demandante_id','imagen_dni_demandado_id','type_id','reason_id','demandado_user_id','demandante_user_id'];

    public function imagePartida(){
    	return  $this->belongsTo('\App\ImagenPartida','imagen_partida_id');
    }
    public function imageDniDemandante(){
    	return  $this->belongsTo('\App\ImagenDni','imagen_dni_demandante_id');
    }
    public function imageDniDemandado(){
    	return  $this->belongsTo('\App\ImagenDni','imagen_dni_demandado_id');
    }
    
    public function type(){
    	return  $this->belongsTo('\App\type','type_id');
    }
    public function reason(){
    	return  $this->belongsTo('\App\reason','reason_id');
    }

    public function demandante(){
    	return  $this->belongsTo('\App\User','demandante_user_id');
    }

    public function demandado(){
    	return  $this->belongsTo('\App\User','demandado_user_id');
    }
    
    public function document(){
    	return  $this->hasMany('\App\ExpedienteDocument','expediente_id');
    }


}
