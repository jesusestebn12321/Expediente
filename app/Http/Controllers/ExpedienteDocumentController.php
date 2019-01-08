<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpedienteDocument;
use App\ImagenDocument;
use App\ImagenPartida;
use App\Expediente;
use App\ImagenDni;
use App\reason;
use App\type;
use App\User;

class ExpedienteDocumentController extends Controller{
    public function index($id){
        //
        $expediente= Expediente::find($id);
        return view('Document.index',compact('expediente'));
     }
    public function create(){
        $expediente= new Expediente;
        $user= new user;
        $expedienteDocument=new ImagenDocument;
        $type=Type::all();
        $reason=Reason::all();
        return view('Expediente.create',compact('type','reason'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function more(Request $request){
        if ($request->file()) {
            $extension=$request->file('imgDocument')->getClientOriginalExtension();
            $imgDocument=$request->file('imgDocument')->getClientOriginalExtension();
            if($extension == 'pdf'){
                // dd($extension);
                $file = $request->file('imgDocument');
                $name = 'Document-' .$request->document .'_'.time() . '.' . $extension;
                $path = public_path() . '/uploads/images/document';
                $file->move($path, $name);
            }
        }
        $Document=new ImagenDocument;
        $Document->imagen= $name;
        $Document->save();

        $expedienteDocument=new ExpedienteDocument;
        $expedienteDocument->imagen_document_id=$Document->id;
        $expedienteDocument->expediente_id=$request->expediente_id;
        $expedienteDocument->save();

        $message =  'Se agrego otro documento al expediente';
        return redirect()->route('manageAdmin-Expediente-index')->with('message',$message);
               
    }
    public function store(Request $request){
                
        $demandante=User::where('dni',$request->dniDemandante)->first();
        $demandado=User::where('dni',$request->dniDemandado)->first();
        if(isset($demandante)){
            if( isset($demandado)){
                if($demandante!=$demandado){
                    $expediente=new Expediente;
                    
                    if ($request->file()) {
                        if($request->file('imgDemandado')){
                            $extension=$request->file('imgDemandado')->getClientOriginalExtension();
                            if($extension=='pdf'){
                                // dd($extension);
                                $file = $request->file('imgDemandado');
                                $name = 'actaMatrimonio-' .$request->dniDemandado .'_'.time() . '.' . $extension;
                                $path = public_path() . '/uploads/images/actas';
                                $file->move($path, $name);
                            }
                        }else{
                            $name='null';
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
     

                        if($request->file('imgPartida')){
                            $extension=$request->file('imgPartida')->getClientOriginalExtension();
                            if($extension == 'pdf'){
                                // dd($extension);
                                $file = $request->file('imgPartida');
                                $name = 'partida-' .$request->dniDemandate .'_'.time() . '.' . $extension;
                                $path = public_path() . '/uploads/images/partida';
                                $file->move($path, $name);
                            }
                        }else{
                            $name='null';
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
                   
                   $imgDocument=$request->file('imgDocument')->getClientOriginalExtension();
                   if($extension == 'pdf'){
                       // dd($extension);
                       $file = $request->file('imgDocument');
                       $name = 'Document-' .$request->document .'_'.time() . '.' . $extension;
                       $path = public_path() . '/uploads/images/document';
                       $file->move($path, $name);
                   }
                   $Document=new ImagenDocument;
                   $Document->imagen= $name;
                   $Document->save();

                   $expedienteDocument=new ExpedienteDocument;

                   $expedienteDocument->imagen_document_id=$Document->id;
                   $expedienteDocument->expediente_id=$expediente->id;
                   $expedienteDocument->save();


                   




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

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpedienteDocument  $expedienteDocument
     * @return \Illuminate\Http\Response
     */
    public function show(ExpedienteDocument $expedienteDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpedienteDocument  $expedienteDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpedienteDocument $expedienteDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpedienteDocument  $expedienteDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpedienteDocument $expedienteDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpedienteDocument  $expedienteDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
        $expediente= ExpedienteDocument::where('expediente_id',5)->get();
        $expe= Expediente::find($id);
        
        foreach ($expediente as $expedientes) {
            # code...
            
            $expedientes->delete();
          
        }
        $expe->delete();
        exit('Expediente Eliminado safictoriamente');
    }
}
