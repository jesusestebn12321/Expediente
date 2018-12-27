@extends('layouts.appUser')
<title>Expedientes</title>
@section('js')
    <script>
        $("#table").DataTable();
    </script>
@endsection
@section('content')
<main>
    <div class="container">
        <div class="row">
            @if(Session::has('message'))
            <div class='alert alert-success'>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif
            <br>
            <div class="col-lg-6">
                <h1 class='app-sub-titulo'><i class='fa fa-file'></i> <b>E</b>xpedientes</h1><hr>   
            </div>
            @if (Auth::user()->rol==1)    
            <div class="col-lg-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>Crear Expedientes</h3>
                        <p>Agrega expedientes nuevos a la base de datos</p>
                    </div>
                    <div class="icon" style='margin-top:1rem'>
                        <i class="fa fa-plus"></i>
                    </div>
                    <a href="{{route('manageAdmin-Expediente-create')}}" class="small-box-footer">IR <i class="fa fa-eye"></i></a>
                </div>
            </div>
            @endif
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <table class='table table-striped table-bordered table-hover ' id='table'>
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Demandado</th>
                            <th>Demandante</th>
                            <th>Creado</th>
                            <th>Editado</th>
                            @if(Auth::user()->rol!=1)
                            <th></th>
                            @endif
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($expediente as $expedientes)
                        @if(Auth::user()->id == $expedientes->demandante->id || Auth::user()->id == $expedientes->demandado->id)
                            <tr id='tr{{$expedientes->id}}'>
                            <input type="hidden" id='id{{$expedientes->id}}' value='{{$expedientes->id}}'>
                            <input type="hidden" id='code{{$expedientes->id}}' value='{{$expedientes->code}}'>
                                <td>{{$expedientes->code}}</td>
                                <td>{{$expedientes->demandado->pais == 1 ? 'V-' : 'E-'}}{{$expedientes->demandado->dni}}</td>
                                <td>{{$expedientes->demandante->pais == 1 ? 'V-' : 'E-'}}{{$expedientes->demandante->dni}}</td>
                                <td>{{$expedientes->created_at}}</td>
                                <td>
                                    {{$expedientes->updated_at!=$expedientes->created_at ?
                                    $expedientes->updated_at :
                                    'No a sido modificado'}}
                                </td>
                                @if(Auth::user()->rol!=1)
                                <td>
                                    {{Auth::user()->id != $expedientes->demandante->id ? 'Demandante' : 'Demandado'}}
                                </td>
                                @endif
                                <td>
                                    @if (Auth::user()->rol==1)
                                    <a class='btn btn-danger' href="#" onclick="Destroy({{$expedientes->id}})"><i class='fa fa-remove'></i></a>
                                    <a class='btn btn-warning' href="{{route('manageAdmin-Expediente-edit', $expedientes->id)}}"><i class='fa fa-edit'></i></a>
                                    <a href="{{route('manageAdmin-Expediente-show', $expedientes->id)}}" class='btn btn-info'><i class='fa fa-eye'></i></a>
                                    <a class='btn btn-success' href="{{route('manageAdmin-Expediente-download', $expedientes->id)}}"><i class='fa fa-download'></i></a>
                                    @else
                                    <a href="{{route('manageUser-Expediente-show', $expedientes->id)}}" class='btn btn-info'><i class='fa fa-eye'></i></a>
                                    <a class='btn btn-success' href="{{route('manageUser-Expediente-download', $expedientes->id)}}"><i class='fa fa-download'></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                        @endforeach
                        
                        </tbody>
                </table>
            </div>     
        </div>
    </div>
</main>
@endsection
