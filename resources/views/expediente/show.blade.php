@extends('layouts.appUser')
<title>Ver | Expedientes</title>
@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
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
                                    <div class="col-lg-5">
                                        <img class='app-img-DD-pdf' src="{{asset('uploads/images/'.$expediente->imgDemandado)}}" alt="">                        
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
                                <h2>Motivo de la demanda</h2>    
                            </li>
                            <li class="list-group-item"> 
                                <p>{{$expediente->type}}</p>
                            </li>
                        </ul>
                    </div>
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