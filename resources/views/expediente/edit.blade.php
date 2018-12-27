@extends('layouts.appUser')
<title>Crear | Expedientes</title>
@section('js')
    
@endsection
@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <h1 class='app-sub-titulo'> <i class='fa fa-plus'></i> <b>C</b>rear <b>E</b>xpediente {{$expediente->code}}</h1><hr>   
        <hr>
    </div>      
    <div class="row">
        <div class="panel panel-defauld">
            <div class="panel-body">
                <div class="container">
                    <div class="row">
                    <form class="form-horizontal" method="GET" action="{{route('manageAdmin-Expediente-update', $expediente->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name='code' value='{{$expediente->code}}'>
                            <div class="col-lg-6">
                                    <ul class="list-group">
                                        <li class="list-group-item app-list-pdf" >
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <h2>Demandante</h2>
                                                </div>
                                                <div class="col-lg-5">
                                                    <img class='app-img-DD-pdf' src="{{asset('img/avatar.jpg')}}" alt="">                        
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
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-group">
                                    <li class="list-group-item app-list-pdf" >
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h2>Demandado</h2>
                                            </div>
                                            <div class="col-lg-5">
                                                <img class='app-img-DD-pdf' src="{{asset('img/avatar.jpg')}}" alt="">                        
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
                            </div>    
                            <hr>
                            <div class='center' style='text-align: center;'><h2>Motivos de la Demanda:</h2></div>
                            <div class="form-group">
                                    <div class="col-md-10">
                                        <input class='form-control' name="type" value='{{$expediente->type}}' required>
                                    </div>
                                </div> 
                            <hr>
                        </div>
                        <button class='btn btn-primary btn-block'>Crear</button> 
                    </form>   
                    </div>
                </div>  
</div>
@endsection
