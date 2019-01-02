<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\ExpedienteDocument;
use App\ImagenDocument;
use App\ImagenPartida;
use App\Expediente;
use App\ImagenDni;
use App\reason;
use App\type;
use App\User;
=======
use App\Expediente;
use App\ExpedienteDocument;
use App\ImagenDni;
use App\ImagenDocument;
use App\ImagenPartida;
use App\Reason;
use App\type;
use App\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
>>>>>>> fc590adbbadc3a10868dca9388d20eacfcd2b4f3
class ExpedienteController extends Controller{ 
    
    public function index(){
       $expediente= ExpedienteDocument::all();
       return view('Expediente.index', compact('expediente'));
    }

   
    public function create(){
       //
       $expediente= new Expediente;
       $user= new user;
       $type=Type::all();
       $reason=Reason::all();
       return view('Expediente.create',compact('type','reason'));
    }
    
    public function store(Request $request){
                
        $demandante=User::where('dni',$request->dniDemandante)->first();
        $demandado=User::where('dni',$request->dniDemandado)->first();
        if(isset($demandante)){
            if( isset($demandado)){
                if($demandante!=$demandado){
                    $expediente=new Expediente;
                    
                    if ($request->file()) {
                        $extension=$request->file('imgDemandado')->getClientOriginalExtension();
                        if($extension == 'jpg' || $extension=='png' ){
                            // dd($extension);
                            $file = $request->file('imgDemandado');
                            $name = 'Demandado-' .$request->dniDemandado .'_'.time() . '.' . $extension;
                            $path = public_path() . '/uploads/images/demandado';
                            $file->move($path, $name);
                        }
                        $expediente->imgDemandado= $name;
                        
                        $extension=$request->file('imgDniDemandante')->getClientOriginalExtension();
                        if($extension == 'pdf'){
                            // dd($extension);
                            $file = $request->file('imgDniDemandante');
                            $name = 'dniDemandado-' .$request->dniDemandante .'_'.time() . '.' . $extension;
                            $path = public_path() . '/uploads/images/dni';
                            $file->move($path, $name);
                        }
                        $dniDemandante=new ImagenDni;
                        $dniDemandante->imagen= $name;
                        $dniDemandante->save();

                        $expediente->imagen_dni_demandante_id=$dniDemandante->id;
        
                        $extension=$request->file('imgDniDemandado')->getClientOriginalExtension();
                        if($extension == 'pdf'){
                            // dd($extension);
                            $file = $request->file('imgDniDemandado');
                            $name = 'dniDemandante-' .$request->dniDemandado .'_'.time() . '.' . $extension;
                            $path = public_path() . '/uploads/images/dni';
                            $file->move($path, $name);
                        }
                        $dniDemandado=new ImagenDni;
                        $dniDemandado->imagen= $name;
                        $dniDemandado->save();

                        $expediente->imagen_dni_demandado_id=$dniDemandado->id;
     

                       $extension=$request->file('imgPartida')->getClientOriginalExtension();
                       if($extension == 'pdf'){
                           // dd($extension);
                           $file = $request->file('imgPartida');
                           $name = 'partida-' .$request->dniDemandate .'_'.time() . '.' . $extension;
                           $path = public_path() . '/uploads/images/partida';
                           $file->move($path, $name);
                       }
                       $Partida=new ImagenPartida;
                       $Partida->imagen= $name;
                       $Partida->save();

                       $expediente->imagen_partida_id=$Partida->id;

                   }
                   

                   $expediente->code= 'JTS'.'-'.time().'-'.$request->dniDemandante;
                   $expediente->demandante_user_id=$demandante->id;
                   $expediente->demandado_user_id=$demandado->id;
                  
                   $expediente->type_id=$request->type;
                   $expediente->reason_id=$request->reason;
                   

                   

                   $expediente->save();
                   $message =  'Expediente Creado con Exito';
                   return redirect()->route('manageAdmin-Expediente-index')->with('message',$message);
               }else{
                   $message =  'Cedulas iguales';
                   return redirect()->route('manageAdmin-Expediente-create')->with('message',$message);
               }
           }else{
               $message =  'Cedulas del demandado invalida';
               return redirect()->route('manageAdmin-Expediente-create')->with('message',$message);
           }
       }else{
           $message =  'Cedulas del demandante invalida';
           return redirect()->route('manageAdmin-Expediente-create')->with('message',$message);
       } 
    }

    public function show($id){
       //
       $expediente= Expediente::find($id);
       return view('Expediente.show',compact('expediente'));
    }

    public function edit($id){
       //
       $expediente=Expediente::where('id',$id)->first();
       $type=type::all();
       $reason=reason::all();
       return view('Expediente.edit', compact('expediente','type','reason'));
    }

    public function update(Request $request, $id){
       //
        $expediente= Expediente::find($id);
        $demandante=User::where('dni',$request->dniDemandante)->first();
        $demandado=User::where('dni',$request->dniDemandado)->first();
        if(isset($demandante)){
            if( isset($demandado)){
                if($demandante!=$demandado){
                $expediente->demandante_user_id=$demandante->id;
                $expediente->demandado_user_id =$demandado->id; 
                $expediente->type_id           =$request->type;
                $expediente->reason_id         =$request->reason;
                $expediente->save();
                $message =  'Editado con Exito';
                return redirect()->route('manageAdmin-Expediente-index')->with('message',$message);
                }else{
                    $message =  'Cedulas iguales'; 
                    return redirect()->route('manageAdmin-Expediente-edit', $expediente->id)->with('message',$message);
                }
            }else{
                $message =  'Cedulas invalida';
                return redirect()->route('manageAdmin-Expediente-edit', $expediente->id)->with('message',$message);
            }
        }else{
            $message =  'Cedulas invalida';
            return redirect()->route('manageAdmin-Expediente-edit', $expediente->id)->with('message',$message);
        }
    }

   public function destroy($id){
       $expediente= Expediente::find($id);
       $expediente->delete();
       exit('Expediente Eliminado safictoriamente');
   }

    public function download($id){
        $expedienteDocument= ExpedienteDocument::all();
        $expediente= Expediente::find($id);
        $id=$id;
       
        $pdf = PDF::loadView('pdf.index',compact('expedienteDocument','id','expediente'));
        
        return $pdf->download('expediente'.$expediente->code.'.pdf');
    }
}
