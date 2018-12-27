@extends('layouts.appUser')
<title>Crear | Expedientes</title>
@section('js')
@endsection
@section('content')
<style>
    
  </style>
<div class="container">
    <div class="row">
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
                                                <div class="col-lg-5">
                                                                     
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

                            <div class='center' style='text-align: center;'>
                                <h2>Foto del demandado:</h2>
                                <input type="file" name='imgDemandado' class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple />
                                <label for="upload"><span>Foto <i class='fa fa-upload'></i> </span></label>      
                            </div>
                            
                            <hr>
                            <div class='center' style='text-align: center;'><h2>Motivos de la Demanda:</h2></div>
                            <div class="form-group">
                                    <div class="col-md-6">
                                        <textarea class='form-control' name="type" cols="80" rows="5" required></textarea>
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
