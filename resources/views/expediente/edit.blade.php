@extends('layouts.appUser')
<title>Crear | Expedientes</title>
@section('js')
    
@endsection
@section('content')
<div class="container">
    <div class="row">
        <hr>
        @if(Session::has('message'))
            <div class='alert alert-success'>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        <h1 class='app-sub-titulo'> <i class='fa fa-plus'></i> <b>C</b>rear <b>E</b>xpediente {{$expediente->code}}</h1><hr>   
        <hr>
    </div>      
    <div class="row">
        <div class="panel panel-defauld">
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                    <form class="form-horizontal" method="GET" action="{{route('manageAdmin-Expediente-update', $expediente->id)}}">
                        {{ csrf_field() }}
                        <input type="hidden" name='code' value='{{$expediente->code}}'>
                        <ul class="list-group">
                            <li class="list-group-item app-list-pdf" >
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h2>Demandante</h2>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label for="dniDemandante" class="col-md-4 control-label">Cedula:</label>
                                    <div class="col-md-6">
                                        <input id='dniDemandante' type="number" class="form-control" value='{{$expediente->demandante->dni}}' name="dniDemandante" required>
                                    </div>
                                </div>
                            </li> 
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item app-list-pdf" >
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h2>Demandado</h2>
                                    </div>
                                    <div class="col-lg-5">
                                        <img class='app-img-DD-pdf' src="{{asset('uploads/images/demandado/'.$expediente->imgDemandado)}}" alt="">                        
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label for="dniDemandado" class="col-md-4 control-label">Cedula:</label>
                                    <div class="col-md-6">
                                        <input id='dniDemandado' type="number" class="form-control" value='{{$expediente->demandado->dni}}' name="dniDemandado" required>  
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-6">
                                <h2>Tipos de Demandas</h2><hr>
                                @foreach ($type as $types)
                                    <label class='btn btn-secondary bg-aqua-gradient'>{{$types->type}}
                                        <input  type="radio" autocomplete="off" value="{{$types->id}}" name="type" id="{{$types->id}}">
                                    </label>
                                @endforeach        
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-6">
                                <h2>Tipos de Demandas</h2><hr>
                                @foreach ($reason as $reasons)
                                    <label class='btn btn-secondary bg-red-gradient'>{{$reasons->reason}}
                                        <input  type="radio" autocomplete="off" value="{{$reasons->id}}" name="reason" id="{{$reasons->id}}">
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                    </div>
                    <button class='btn btn-primary btn-block'>Crear</button> 
                </form>   
            </div>
        </div>  
    </div>
</div>
@endsection
