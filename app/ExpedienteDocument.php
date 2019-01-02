<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpedienteDocument extends Model{
    protected $table='expediente_documents';
    protected $fillable = ['id','expediente_id','imagen_document_id'];

    public function expediente(){
    	return  $this->belongsTo('\App\Expediente','expediente_id');
    }
    public function document(){
    	return  $this->belongsTo('\App\ImagenDocument','imagen_document_id');
    }
}
