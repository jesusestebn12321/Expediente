@extends('layouts.appUser')
<title>Dashboard {{Auth::user()->rol==1 ? '- Admin' : ''}}</title>
@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <h1 class='app-sub-titulo'> <i class='fa fa-dashboard'></i> <b>D</b>ashboard {{Auth::user()->rol==1 ? '- Admin' : ''}}</h1><hr>   
        <hr>
        @if (Auth::user()->rol==1)
        <div class='col-xs-6 col-lg-6 col-md-6'>
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Expedientes</h3>
                    <p>Se mostrara una lista de espediente podra, descargarlos, borrarlos, editarlos y verlos </p>
                </div>
                <div class="icon" style='margin-top:1rem'>
                    <i class="fa fa-file"></i>
                </div>
                <a href="{{route('manageAdmin-Expediente-index')}}" class="small-box-footer">IR <i class="fa fa-arrow-eye"></i></a>
            </div>
        </div>        
        <div class='col-xs-6 col-lg-6 col-md-6'>
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>Crear Expedientes</h3>
                    <p>Agreaga mas expedientes a la base de datos</p>
                </div>
                <div class="icon" style='margin-top:1rem'>
                    <i class="fa fa-file"></i>
                </div>
                <a href="{{route('manageAdmin-Expediente-create')}}" class="small-box-footer">IR <i class="fa fa-arrow-eye"></i></a>
            </div>
        </div> 
        @else
        <div class='col-xs-6 col-lg-6 col-md-6'>
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Ver Expedientes</h3>
                    <p>Ver mis expedientes</p>
                </div>
                <div class="icon" style='margin-top:1rem'>
                    <i class="fa fa-file"></i>
                </div>
                <a href="{{route('manageUser-Expediente-index')}}" class="small-box-footer">IR <i class="fa fa-arrow-eye"></i></a>
            </div>
        </div> 
        @endif
               
    </div>        
</div>
@endsection
