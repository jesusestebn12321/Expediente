<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model{
    //
    protected $table='reasons';
    protected $fillable = ['id','reason'];
    
    public function typeReason(){
    	return  $this->hasMany('\App\type_reason','reason_id');
    }
}
