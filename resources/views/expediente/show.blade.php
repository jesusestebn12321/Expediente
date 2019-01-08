@extends('layouts.appUser')
<title>Ver | Expedientes</title>
@section('content')
<div class="container">
    <div class="row">
        
        <hr>
        <h1 class='app-sub-titulo'> <i class='fa fa-file'></i>Codigo del <b>E</b>xpediente  {{$expediente->code}} </h1><hr>   
        <hr>
    </div>      
    <div class="row">
        <div class="panel panel-defauld">
            <div class="panel-body">
                <div>
                   <ul class="list-group">
                        <li class="list-group-item app-list-pdf bg-black-gradient" >
                            <div class="row">
                                <div class="col-lg-7"><h2>Demandante</h2></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class='col-lg-5'>
                                    <label for="">Cedula:</label>
                                </div>
                                <div class='col-lg-5'>
                                    <p>{{$expediente->demandante->pais==1 ? 'V-' : 'E-'}}{{$expediente->demandante->dni}}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label for="">Nombre:</label>
                                </div>
                                <div class="col-lg-5">
                                    <p>{{$expediente->demandante->name}}</p>
                                </div>
                            </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">Apellido:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandante->lastname}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">E-mail:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandante->email}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item app-list-pdf bg-gray-active" >
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h2>Demandado</h2>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class='col-lg-5'>
                                        <label for="">Cedula:</label>
                                    </div>
                                    <div class='col-lg-5'>
                                        <p>{{$expediente->demandado->pais==1 ? 'V-' : 'E-'}}{{$expediente->demandado->dni}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">Nombre:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandado->name}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">Apellido:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandado->lastname}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">E-mail:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandado->email}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>    
                    <hr>           
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="list-group">
                            <li class="list-group-item bg-blue-gradient" >
                                <h2>Tipo de la demanda</h2>    
                            </li>
                            <li class="list-group-item"> 
                                <p>{{$expediente->type->type}}</p>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="list-group">
                            <li class="list-group-item bg-aqua-gradient" >
                                <h2>Motivo de la demanda</h2>    
                            </li>
                            <li class="list-group-item"> 
                                <p>{{$expediente->reason->reason}}</p>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <h2>Documentos en pdf</h2><hr>
                        @if($expediente->imgDemandado!='null')
                        <h3>Acta de Matrimonio</h3>
                        <div>
                            <embed src="{{asset('uploads/images/actas/'.$expediente->imgDemandado)}}" type="application/pdf" width="800" height="600"></embed>
                        </div>
                        @endif
                        @if($expediente->imagePartida->imagen!='null')
                        <div>
                            <h3>Partida de Nacimiento</h3>
                            <embed src="{{asset('uploads/images/partida/'.$expediente->imagePartida->imagen)}}" type="application/pdf" width="800" height="600"></embed>
                        </div>
                        @endif
                        <div>
                            <h3>Identificacion del Demandate</h3>
                            <embed src="{{asset('uploads/images/dni/'.$expediente->imageDniDemandante->imagen)}}" type="application/pdf" width="800" height="600"></embed>
                        </div>
                        <div>
                            <h3>Identificacion del Demandado</h3>
                            <embed src="{{asset('uploads/images/dni/'.$expediente->imageDniDemandado->imagen)}}" type="application/pdf" width="800" height="600"></embed>
                        </div>
                        <h3>Documente Anexados</h3>
                        @foreach ($document as $documents)
                        <div><br>
                            <embed src="{{asset('uploads/images/document/'.$documents->document->imagen)}}" type="application/pdf" width="800" height="600"></embed>
                        </div>
                        @endforeach
                    <hr>
                    <div class="row" style='text-align: center;'>
                        <div class="col-lg-5">
                            <label for="">Fecha de Inicio</label>
                            <p>{{$expediente->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection