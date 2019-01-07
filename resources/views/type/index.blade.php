@extends('layouts.appUser')
@include('layouts.modales.modalAddType')
<title>Tipo De Demanda</title>
@section('js')
    <script>
        $("#table").DataTable();
    </script>
@endsection
@section('content')
<main>
    <div class="container">
        <div class="row">
            <br>
            <div class="col-lg-6">
                <h1 class='app-sub-titulo'><i class='fa fa-file'></i> <b>T</b>ipo De Demanda</h1><hr>   
            </div>
            <div class="col-lg-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>Crear Tipo de Demanda</h3>
                        <p>Agrega tipo de demanda nuevos a la base de datos</p>
                    </div>
                    <div class="icon" style='margin-top:1rem'>
                        <i class="fa fa-plus"></i>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modalAddTypes" class="small-box-footer">IR <i class="fa fa-eye"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <table class='table table-striped table-bordered table-hover ' id='table'>
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>   
                        @foreach ($type as $types)
                            <tr id='tr{{$types->id}}'>
                            <input type="hidden" id='id{{$types->id}}' value='{{$types->id}}'>
                                <td>
                                    <input type="text" style='border:none;background:none' disabled  value='{{$types->type}}' id='type{{$types->id}}'>
                                    <input type="text" value='{{$types->type}}' class='form-control hidden' id='inputType{{$types->id}}'>
                                </td>
                                <td>
                                    <a class='btn btn-danger' href="#" onclick="DestroyType({{$types->id}})"><i class='fa fa-remove'></i></a>
                                    <a class='btn btn-warning' id='editType{{$types->id}}' onclick="editType({{$types->id}})" href="#"><i class='fa fa-edit'></i></a>
                                    <a class='btn btn-info hidden' id='bntType{{$types->id}}' onclick="upDateType({{$types->id}})" href="#"><i class='fa fa-edit'></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>     
        </div>
    </div>
</main>
@endsection
