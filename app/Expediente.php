<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model{
    //
    protected $table='expedientes';
    protected $fillable = ['id','code','type','demandado_id','demandante_id', 'asunto','imgDemandado'];

    public function demandante(){
    	return  $this->belongsTo('\App\User','demandante_user_id');
    }

    public function demandado(){
    	return  $this->belongsTo('\App\User','demandado_user_id');
    }
}
