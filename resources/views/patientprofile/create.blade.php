@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype='multipart/form-data' role="form" method="POST" action="{{ url('/patient/profile/store') }}">
                        {{ csrf_field() }}
                     <div class="form-group{{ $errors->has('profilepicture') ? ' has-error' : '' }}">
                            <label for="profilepicture" class="col-md-4 control-label">Imagen de perfil</label>
                            <div class="col-md-6">
                                <input id="profilepicture" required type="file" class="form-control" name="profilepicture" value="{{ old('profilepicture') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profilepicture') }}</strong>
                                    </span>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input id="name" required type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Apellido</label>
                            <div class="col-md-6">
                                <input id="lastname" required type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                            <label for="birthdate" class="col-md-4 control-label">Dia de nacimiento</label>
                            <div class="col-md-6">
                                <input id="birthdate" required type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('bloodtype') ? ' has-error' : '' }}">
                            <label for="bloodtype" class="col-md-4 control-label">Tipe de Sangre</label>
                            <div class="col-md-6">
                                <input id="bloodtype"  required type="text" class="form-control" name="bloodtype" value="{{ old('bloodtype') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bloodtype') }}</strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">Sexo</label>
                            <div class="col-md-6">
                                <select id="sex" required type="text" class="form-control" name="sex" value="{{ old('sex') }}">
                                      <option value="Hombre">Hombre</option>
                                      <option value="Mujer">Mujer</option>
                                </select>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Dirección</label>
                            <div class="col-md-6">
                                <input id="location" required class="form-control" name="location" value="{{ old('location') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Teléfono</label>
                            <div class="col-md-6">
                                <input id="phone" required class="form-control" name="phone" value="{{ old('phone') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">C.P.</label>
                            <div class="col-md-6">
                                <input id="zip" required class="form-control" name="zip" value="{{ old('zip') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('curp') ? ' has-error' : '' }}">
                            <label for="curp" class="col-md-4 control-label">CURP</label>
                            <div class="col-md-6">
                                <input id="curp" required class="form-control" name="curp" value="{{ old('curp') }}">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('curp') }}</strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Crear Perfil
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHkbiyndwx1XG4cdc7n_OZMT2thl6ruaw&libraries=places"></script>
   
<script>
    var address = document.getElementById('location');
    var options = {
        componentRestrictions: {
        country: 'mx'
        }
    };
    new google.maps.places.Autocomplete(address, options);
    function showaddr(){
        out = address.innerHTML;
	    alert(out);
    }
</script>
@endsection
