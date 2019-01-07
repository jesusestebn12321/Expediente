@extends('layouts.appUser')
@include('layouts.modales.modalAddReason')
<title>Expediente | Motivos de demandas</title>
@section('js')
    <script>
        $("#table").DataTable();
    </script>
@endsection
@section('content')
<main>
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-lg-6">
                <h1 class='app-sub-titulo'><i class='fa fa-file'></i> <b>M</b>otivos de demandas</h1><hr>   
            </div> 
            <div class="col-lg-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>Crear Motivos</h3>
                        <p>Agrega Motivos nuevos a la base de datos</p>
                    </div>
                    <div class="icon" style='margin-top:1rem'>
                        <i class="fa fa-plus"></i>
                    </div>
                    <a data-toggle="modal" data-target="#modalAddReasons" href="#" class="small-box-footer">IR <i class="fa fa-eye"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <table class='table table-striped table-bordered table-hover ' id='table'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Motivos de demanda</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reason as $reasons)
                            <tr id='tr{{$reasons->id}}'>
                            <input type="hidden" id='id{{$reasons->id}}' value='{{$reasons->id}}'>
                                <td>{{$reasons->id}}</td>
                                <td>
                                    <input type="text" style='border:none;background:none' disabled  value='{{$reasons->reason}}' id='reason{{$reasons->id}}'>
                                    <input type="text" value='{{$reasons->reason}}' class='form-control hidden' id='inputReason{{$reasons->id}}'>
                                </td>
                                <td>
                                    <a class='btn btn-danger' href="#" onclick="DestroyReason({{$reasons->id}})"><i class='fa fa-remove'></i></a>
                                    
                                    <a class='btn btn-warning' id='editReason{{$reasons->id}}' onclick="editReason({{$reasons->id}})" href="#"><i class='fa fa-edit'></i></a>
                                    <a class='btn btn-info hidden' id='bntReason{{$reasons->id}}' onclick="upDateReason({{$reasons->id}})" href="#"><i class='fa fa-edit'></i></a>
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
