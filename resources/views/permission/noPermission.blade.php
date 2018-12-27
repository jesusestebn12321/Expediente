@extends('layouts.appUser')
<title> Error404 </title>
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            404 Pagina de Error
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-red"> 404</h2>

            <div class="error-content">
                <h3><i class="fa fa-warning text-red"></i> Hola {{ Auth::user()->name }}
                    Ups! al parecer no tienes permisos para utilizar esta
                    función...</h3>

                <p>
                    Pagina No permitida para este el usuario {{Auth::user()->name}}, consulta tus derechos dentro del sistema.
                Tal vez deberías <a href="{{url('/home')}}">Regresar</a>.
                </p>


            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
    <!-- /.content -->

@endsection