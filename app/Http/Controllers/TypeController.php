<?php

namespace App\Http\Controllers;

use App\type;
use Illuminate\Http\Request;

class TypeController extends Controller{
    public function index(){
        $type= Type::all();
        return view('type.index',compact('type'));
    }

    public function store(Request $request){
        $type=new Type();
        $type->type= $request->type;
        $type->save();
        exit('Tipo de demanda creado safictoriamente');
    }

    public function update(Request $request,$id){
        //
        $type= Type::find($id);
        $type->type= $request->type;
        $type->save();
        exit('success');        
    }

    public function destroy($id){    
       $type= Type::find($id);
       $type->delete();
       exit('Tipo de demanda Eliminado safictoriamente');
   
    }
}
