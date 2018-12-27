@extends('layouts.app')
<title>Registrar</title>
@section('content')
<section id="about" class="about-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Registrar.</h2>
                <p class="text-white-50">Registrate en el sistema de expedientes digitales llena el siguente formulario.</p>
            </div>
        </div>
        <img src="{{asset('startbootstrap/img/ipad1.png')}}" class="img-fluid" alt=""> 
    </div><br>
</section>
<section id="projects" class="projects-section bg-gray">                         
    <div class="container">
        <div class="row" style="">
            <div class="col-lg-offset-2 col-md-5" style='position:relative;left:30%;top:10px;padding:10px;background:#cccc;border-radius:10px'>
                <div class="panel panel-default">
                    <div class="panel-heading bg-black text-white " style='margin-bottom:10px;border-top-left-radius:5px;border-top-right-radius:5px;padding:10px;text-align: center'><h4>Registrar</h4></div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <input type="hidden" value='0' name='rol'>
                            {{-- pais --}}
                            <div class="form-group">
                                <label for="dni" class="control-label">Nacionalidad:</label>
                                <select class='form-control' value='N' name="pais" size='1'>                     
                                    <option >Nacionalidad</option>                    
                                    <option value="1">V</option>                    
                                    <option value="2">E</option>
                                </select>
                            </div>
                            {{-- fin pais --}}
                            {{-- cedula --}}
                            <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                                <label for="dni" class="control-label">Cedula:</label>
                                <input id="dni" type="number" placeholder="Cedula" class="form-control" name="dni" value="{{ old('dni') }}" required>
                                @if ($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{-- fin cedula --}}
                            {{-- nombre --}}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Nombres:</label>
                                <input id="name" placeholder="Nombre" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{-- fin nombre --}}
                            {{-- apellido --}}
                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="lastname" class="control-label">Apellidos:</label>
                                <input id="lastname" type="text" placeholder="Apellido" class="form-control" name="lastname" value="{{ old('lastname') }}" required>
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail:</label>
                                <input id="email" type="email" placeholder="expamle@exmple.com" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Contraseña:</label>
                                <input id="password" placeholder="Contraseña" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="control-label">Comfirme Contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                            </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
