<?php

namespace App\Http\Controllers;
use App\Reason;
use Illuminate\Http\Request;

class ReasonController extends Controller{
   
    public function index(){
        $reason= Reason::all();
        return view('reason.index',compact('reason'));
    }

    public function store(Request $request){
        $reason=new Reason();
        $reason->reason= $request->reason;
        $reason->save();
        exit('Motivo creado safictoriamente');
    }

    public function update(Request $request,$id){
        //
        $reason= Reason::find($id);
        $reason->reason= $request->reason;
        $reason->save();
        exit('success');        
    }

    public function destroy($id){    
       $reason= Reason::find($id);
       $reason->delete();
       exit('Motivo Eliminado safictoriamente');
   
    }
}
