<?php

namespace App\Http\Controllers;

use App\Expediente;
use App\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $expediente= Expediente::all();
        return view('Expediente.index', compact('expediente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
        $expediente= new Expediente;
        $user= new user;
        return view('Expediente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
        
        $demandante=User::where('dni',$request->dniDemandante)->first();
        $demandado=User::where('dni',$request->dniDemandado)->first();
        if(isset($demandante)){
            if( isset($demandado)){
                if($demandante!=$demandado){
                    $expediente=new Expediente;
                    
                    if ($request->file()) {
                        $file = $request->file('imgDemandado');
                        $name = 'Demandado-' .$request->dniDemandado .'_'.time() . '.' . $file->getClientOriginalExtension();
                        $path = public_path() . '/uploads/images';
                        $file->move($path, $name);
                    }

                    $expediente->imgDemandado= $name;
                    

                    $expediente->code= 'JTS'.'-'.time().'-'.$request->dniDemandante;
                    $expediente->demandante_user_id=$demandante->id;
                    $expediente->demandado_user_id=$demandado->id;
                    $expediente->type=$request->type;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Expediente  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
        $expediente= Expediente::find($id);
        return view('Expediente.show',compact('expediente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expediente  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
        $expediente=Expediente::where('id',$id)->first();
        return view('Expediente.edit', compact('expediente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expediente  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
        $expediente= Expediente::find($id);
        $demandante=User::where('dni',$request->dniDemandante)->first();
        $demandado=User::where('dni',$request->dniDemandado)->first();
        $expediente->demandante_user_id=$demandante->id;
        $expediente->demandado_user_id =$demandado->id;
        $expediente->code              =$request->code ; 
        $expediente->type              =$request->type;
        $expediente->save();
        return redirect()->route('manageAdmin-Expediente-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expediente  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $expediente= Expediente::find($id);
        $expediente->delete();
        exit('Expediente Eliminado safictoriamente');
    }
    public function download($id){
        $expediente= Expediente::find($id);
        
        $pdf = PDF::loadView('pdf.index',compact('expediente'));
        // dd($pdf);
        return $pdf->download('expediente'.$expediente->code.'.pdf');
    }
}
