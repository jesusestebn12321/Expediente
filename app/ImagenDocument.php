<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenDocument extends Model{
    protected $table='imagen_documents';
    protected $fillable = ['id','imagen'];
    
    public function document(){
    	return  $this->hasMany('\App\ExpedienteDocument','imagen_document_id');
    }
}
