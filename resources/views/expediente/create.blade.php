@extends('layouts.appUser')
<title>Crear | Expedientes</title>

@section('content')
<div class="container">
    <div class="row">
        <hr>
        @if(Session::has('message'))
            <div class='alert alert-danger'>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        <h1 class='app-sub-titulo'> <i class='fa fa-plus'></i> <b>C</b>rear <b>E</b>xpediente </h1><hr>   
        <hr>
    </div>      
    <div class="row">
        <div class="panel panel-defauld">
            <div class="panel-body">
                <div class="container">
                    <div class="row">
                    <form class="form-horizontal" method="POST" action="{{route('manageAdmin-Expediente-store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-lg-6">
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
                                                <input id='dniDemandante' type="number" class="form-control" name="dniDemandante" required>
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
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-group">
                                            <label for="dniDemandado" class="col-md-4 control-label">Cedula:</label>
                                            <div class="col-md-6">
                                               <input id='dniDemandado' type="number" class="form-control" name="dniDemandado" required>  
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>    
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

                            <div class='center' style='text-align: center;'>
                                <div class="row">
                                    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                        <h2>PDF del acta de matrimonio:</h2>
                                        <input type="file" name='imgDemandado' class="hide inputfile" id="upload" require data-multiple-caption="{count} files selected" multiple />
                                        <label for="upload"><span>PDF<i class='fa fa-upload'></i> </span></label>      
                                    </div>
                                    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                        <h4>El acta de matrimonio se debe de encontrar en un formato (.PDF).</h4>    
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class='center' style='text-align: center;'>
                                <div class="row">
                                    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                        <h2>PDF de la Partida de nacimiento del menor:</h2>
                                        <input type="file" name='imgPartida' class="hide partida" id="partida" data-multiple-caption="{count} files selected" require  multiple />
                                        <label for="partida"><span>PDF<i class='fa fa-upload'></i> </span></label>      
                                    </div>
                                    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                        <h4>La Partida de nacimiento del menor solo debe de estar en un formato (.PDF).</h4>    
                                    </div>
                                </div>
                                
                            </div>
                            <hr>

                            <div class='center' style='text-align: center;'>
                                <div class="row">
                                    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                        <h2>PDF de cedula del demandado:</h2>
                                        <input type="file" name='imgDniDemandado' class="hide imgDniDemandado" id="imgDniDemandado" data-multiple-caption="{count} files selected" require  multiple />
                                        <label for="imgDniDemandado"><span>PDF<i class='fa fa-upload'></i> </span></label>      
                                    </div>
                                    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                        <h4>La cedula del demandado solo debe de estar en un formato (.PDF).</h4>    
                                    </div>
                                </div>    
                            </div>
                            <hr>
                            
                            <div class='center' style='text-align: center;'>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                                        <h2>PDF de cedula del demandante:</h2>
                                        <input type="file" name='imgDniDemandante' class="hide imgDniDemandante" id="imgDniDemandante" data-multiple-caption="{count} files selected" require multiple />
                                        <label for="imgDniDemandante"><span>PDF<i class='fa fa-upload'></i> </span></label>      
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                                        <h4>La cedula del demandante solo debe de estar en un formato (.PDF).</h4>    
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class='center' style='text-align: center;'>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                                        <h2>PDF de Documento:</h2>
                                        <input type="file" name='imgDocument' class="hide imgDocument" id="imgDocument" data-multiple-caption="{count} files selected" require multiple />
                                        <label for="imgDocument"><span>PDF<i class='fa fa-upload'></i> </span></label>      
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                                        <h4>Documento solo debe de estar en un formato (.PDF).</h4>    
                                    </div>
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
