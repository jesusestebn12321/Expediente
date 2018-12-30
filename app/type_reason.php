<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_reason extends Model{
    protected $table='type_reasons';
    protected $fillable = ['id','type_id','reason_id'];
    
    public function type(){
    	return  $this->belongsTo('\App\type','type_id');
    }
    public function reason(){
    	return  $this->belongsTo('\App\Reason','reason_id');
    }
}
