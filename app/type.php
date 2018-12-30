<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model{
    protected $table='types';
    protected $fillable = ['id','type'];
    
    public function typeReason(){
    	return  $this->hasMany('\App\type_reason','type_id');
    }


}
