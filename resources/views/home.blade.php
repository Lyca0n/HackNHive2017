@extends('layouts.app')

@section('content')

<div class="container" id="mainCont">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">MediCloud</div>
                <div class="panel-body">
                    MediCloud es una plataforma digital en donde puedes tener acceso a tu propia información médica a donde quiera que vayas. Estará disponible a la mano de personal de la salud para que tú estés tranquilo.
                </div>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row" style="padding-top:0.5cm;">
        <div class="col-sm-12" align="center">
          <p align=center style="color:rgb(105,105,105); font-size:20px; !important;">Ingresa como:</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-2" align="center" align="center" style="padding:10px;">
          <p></p>
        </div>
        <div class="col-sm-4" style="padding:10px;">
          <a href="{{ url('/patient/profile/create') }}">
            <div align="center" style="background-color:rgb(95,158,160); border-radius:5px; padding:0px;">
              <h3 align=center style="font-size:60px; color:white; !important;"><i class="fa fa-user" aria-hidden="true"></i></h3>
              <h3 align=center style="color:white; !important;">Paciente</h3>
            </div>  
          </a>  
        </div>
        <div class="col-sm-4" style="padding:10px;">
          <a href="{{ url('/physician/profile/create') }}">
            <div align="center" style="background-color:rgb(135,206,250); border-radius:5px; margin-left:00px;">
              <h3 align=center style="font-size:60px; color:white; !important;"><i class="fa fa-user-md" aria-hidden="true"></i></h3>
              <h3 align=center style="color:white; !important;">Doctor</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-2" align="center" style="padding:10px;">
          <p></p>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row" style="padding-top:1cm;">
        <div class="col-sm-4">
          <h3 align=center><i class="fa fa-check-circle-o" style="font-size:60px;  color:rgb(105,105,105) !important;" aria-hidden="true"></i></h3>
          <h3 align=center style="color:rgb(105,105,105) !important;" >Confianza</h3>
          <p  style="color:rgb(105,105,105) !important;">Tu información está almacenada a en servidores que cuentan con los mejores estándares de seguridad.</p>
        </div>
        <div class="col-sm-4">
          <h3 align=center><i class="fa fa-heart-o" style="font-size:60px;  color:rgb(105,105,105) !important;"  aria-hidden="true"></i></i></h3>
          <h3 align=center style="color:rgb(105,105,105) !important;" >Tranquilidad</h3>
          <p  style="color:rgb(105,105,105) !important;">Un médico puede acceder a tus datos médicos sin la necesidad de que tengas la preocupación de haber olvidado comentarle algo de tu historial.</p>
        </div>
        <div class="col-sm-4">
          <h3 align=center><i class="fa fa-globe" style="font-size:60px;  color:rgb(105,105,105) !important;"  aria-hidden="true"></i></h3>        
          <h3 align=center style="color:rgb(105,105,105) !important;" >En todo lugar</h3>
          <p style="color:rgb(105,105,105) !important;">Al estar almacenado en la nube, tu información es accesible desde cualquier parte del mundo a cualquier hora con una disponibilidad 24/7.</p>
        </div>
      </div>
    </div>
@endsection
