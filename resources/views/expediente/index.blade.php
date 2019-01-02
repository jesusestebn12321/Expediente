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
        <div class="row"><hr>
            @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
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
                        @if(Auth::user()->id == $expedientes->expediente->demandante->id || Auth::user()->id == $expedientes->expediente->demandado->id)
                            <tr id='tr{{$expedientes->id}}'>
<<<<<<< HEAD
                            <input type="hidden" id='id{{$expedientes->expediente->id}}' value='{{$expedientes->expediente->id}}'>
                            <input type="hidden" id='code{{$expedientes->expediente->id}}' value='{{$expedientes->expediente->code}}'>
=======
                            <input type="hidden" id='id{{$expedientes->id}}' value='{{$expedientes->id}}'>
                            <input type="hidden" id='code{{$expedientes->id}}' value='{{$expedientes->code}}'>
>>>>>>> fc590adbbadc3a10868dca9388d20eacfcd2b4f3
                                <td>{{$expedientes->expediente->code}}</td>
                                <td>{{$expedientes->expediente->demandado->pais == 1 ? 'V-' : 'E-'}}{{$expedientes->expediente->demandado->dni}}</td>
                                <td>{{$expedientes->expediente->demandante->pais == 1 ? 'V-' : 'E-'}}{{$expedientes->expediente->demandante->dni}}</td>
                                <td>{{$expedientes->expediente->created_at}}</td>
                                <td>
                                    {{$expedientes->expediente->updated_at!=$expedientes->expediente->created_at ?
<<<<<<< HEAD
                                    $expedientes->expediente->updated_at :
=======
                                    $expedientes->updated_at :
>>>>>>> fc590adbbadc3a10868dca9388d20eacfcd2b4f3
                                    'No a sido modificado'}}
                                </td>
                                @if(Auth::user()->rol!=1)
                                <td>
<<<<<<< HEAD
                                    
=======
>>>>>>> fc590adbbadc3a10868dca9388d20eacfcd2b4f3
                                    {{Auth::user()->id != $expedientes->expediente->demandante->id ? 'Demandante' : 'Demandado'}}
                                </td>
                                @endif
                                <td>
                                    @if (Auth::user()->rol==1)
                                    <a class='btn btn-danger' title='Eliminar Expediente' href="#" onclick="Destroy({{$expedientes->id}})"><i class='fa fa-remove'></i></a>
                                    <a class='btn btn-warning' title='Editar Expediente' href="{{route('manageAdmin-Expediente-edit', $expedientes->expediente->id)}}"><i class='fa fa-edit'></i></a>
                                    <a href="{{route('manageAdmin-Expediente-show', $expedientes->expediente->id)}}" title='Ver Expediente' class='btn btn-info'><i class='fa fa-eye'></i></a>
                                    <a class='btn btn-success' title='Descargar PDF' href="{{route('manageAdmin-Expediente-download', $expedientes->expediente->id)}}"><i class='fa fa-download'></i></a>
                                    <a class='btn bg-maroon-gradient' title='Anexar documenteto' href="{{route('manageAdmin-Document-index', $expedientes->expediente->id)}}"><i class='fa fa-file'></i></a>
                                    @else
                                    <a href="{{route('manageUser-Expediente-show', $expedientes->expediente->id)}}" class='btn btn-info'><i class='fa fa-eye'></i></a>
                                    <a class='btn btn-success' title='Descargar PDF' href="{{route('manageUser-Expediente-download', $expedientes->expediente->id)}}"><i class='fa fa-download'></i></a>
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
