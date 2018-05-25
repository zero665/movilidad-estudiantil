@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('numeroDeControl') ? ' has-error' : '' }}">
                            <label for="numeroDeControl" class="col-md-4 control-label">Número de control</label>

                            <div class="col-md-6">
                                <input id="numeroDeControl" type="text" class="form-control" name="numeroDeControl" value="{{ old('numeroDeControl') }}" required autofocus>

                                @if ($errors->has('numeroDeControl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numeroDeControl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellidoPaterno') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="apellidoPaterno" type="text" class="form-control" name="apellidoPaterno" value="{{ old('apellidoPaterno') }}" required autofocus>

                                @if ($errors->has('apellidoPaterno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidoPaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellidoMaterno') ? ' has-error' : '' }}">
                            <label for="apellidoMaterno" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="apellidoMaterno" type="text" class="form-control" name="apellidoMaterno" value="{{ old('apellidoMaterno') }}" required autofocus>

                                @if ($errors->has('apellidoMaterno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidoMaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <label for="correo" class="col-md-4 control-label">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="correo" type="email" class="form-control" name="correo" value="{{ old('correo') }}" required>

                                @if ($errors->has('correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('idInstitucion') ? ' has-error' : '' }}">
                            <label for="idInstitucion" class="col-md-4 control-label">Institución</label>

                            <div class="col-md-6">
                                <input id="idInstitucion" type="text" class="form-control" name="idInstitucion" value="{{ old('idInstitucion') }}" required autofocus>

                                @if ($errors->has('institucion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institucion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('carrera') ? ' has-error' : '' }}">
                            <label for="carrera" class="col-md-4 control-label">Carrera</label>

                            <div class="col-md-6">
                                <input id="carrera" type="text" class="form-control" name="carrera" value="{{ old('carrera') }}" required autofocus>

                                @if ($errors->has('carrera'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('carrera') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contrasenia') ? ' has-error' : '' }}">
                            <label for="contrasenia" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="contrasenia" type="password" class="form-control" name="contrasenia" required>

                                @if ($errors->has('contrasenia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contrasenia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="contrasenia-confirm" type="password" class="form-control" name="contrasenia_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
