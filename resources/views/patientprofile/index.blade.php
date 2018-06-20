@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="contImg col-sm-1" ></div>
       <div class=" col-sm-10" ><h2  style="color:#337ab7;">{{$profile->name }} {{$profile->lastname }}</h2>
       </div>
    </div>
    <div class="row " id="firstSect">
	    <div class="contImg col-sm-1" ></div>
	    <div style= "margin:15px; padding:auto;" class="contImg col-sm-3" id="contImg">
		    <img  class="img-responsive" align="center" style="margin:auto;" height="200px" width="200px" src="/images/{{ $profile->profilepicture }}"  alt="user">
	    </div>	
	<div class="contTable col-sm-7 " id="profileCont">
	<div class="table-responsive">
	<table class="table">
    <thead>
    </thead>
    <tbody>
      <tr>
        <td><strong>Sexo:</strong></td>
        <td>{{$profile->sex }}</td>
        <td><strong>CURP:</strong></td>
        <td>{{$profile->curp }}</td>
      </tr>
      <tr>
        <td><strong>Edad:</strong></td>
        <td>30</td>
        <td><strong>Ubicación:</strong></td>
        <td>{{ $profile->location }}</td>
      </tr>
      <tr>
        <td><strong>Fecha de Nacimiento:</strong></td>
        <td id="tdBdate" >{{ date('d-m-Y', strtotime($profile->birthdate)) }}</td>
        <td><strong>Estado:</strong></td>
        <td>Chihuahua</td>
      </tr>
      <tr>
        <td><strong>Tipo de Sangre:</strong></td>
        <td>{{ $profile->bloodtype }} </td>
        <td><strong>CP:</strong></td>
        <td>{{ $profile->zip }}</td>
      </tr>
      <tr>
      <td><strong>Tatuajes:</strong></td>
        <td>Si</td>
        <td><strong>Fecha último tatuaje:</strong></td>
        <td>12 de Febrero 2000</td>
      </tr>
       <tr>
        <td><strong>Alergias:</strong></td>
        <td>Nimesulida, abejas</td>
        <td><strong>Restricciones por el Paciente:</strong></td>
        <td>No</td>
      </tr>
    </tbody>
    </table>
    </div>
	</div>
	<div class="contImg col-sm-1" ></div>	
</div>
<div class="row"> 
   <div class="contImg col-sm-1" ></div>
   <div class=" col-sm-5" ><h2 style="color:#337ab7;">Información General</h2></div>
</div>

<div class="row  " id="secondSect">
	<div class="contImg col-sm-4" ></div>
	
	<div class="contImg col-sm-7" >
	<div class="table-responsive">
	<table class="table">
    <tbody>
      <tr>
        <td><strong>Peso:</strong></td>
        <td>78 kg</td>
        <td ><strong>Ultima Actualización:</strong></td>
        <td>{{$profile->updated_at }}</td>
      </tr>
      <tr>
        <td><strong>Presión Arterial:</strong></td>
        <td>120/80 mm Hg</td>
        <td><strong>Nivel de Glucosa:</strong></td>
        <td>110 mg dl</td>
      </tr> 
     </tbody>   
	</table>
	</div>
	</div>
    </div>
    
    
    
    
    <div class="row"> 
   <div class="contImg col-sm-1" ></div>
   <div class=" col-sm-5" ><h2><a data-toggle="collapse" href="#thirdSect">Condiciones Patológicas</a></h2></div>
</div>

<div class="row panel-collapse collapse" id="thirdSect">
	<div class="contImg col-sm-4" ></div>
	
	<div class="contImg col-sm-7" >
	<div class="table-responsive">
	<table class="table">
    <tbody>
      <tr>
        <td>Diabetes tipo 2</td>
      </tr>
      <tr>
        <td>Hipertensión Arterial</td>
      </tr>
     </tbody>   
	</table>
	</div>
	</div>
</div>   



<div class="row"> 
   <div class="contImg col-sm-1" ></div>
   <div class=" col-sm-5" ><h2><a data-toggle="collapse" href="#fourthSect">Medicamento</a></h2></div>
</div>

<div class="row panel-collapse collapse" id="fourthSect">
  <div class="contImg col-sm-4" ></div>
  
  <div class="contImg col-sm-7" >
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
        <td>Metformina 300 mg</td>
      </tr>
      <tr>
        <td>Lipitor 0-0-1</td>
      </tr>
     </tbody>   
  </table>
  </div>
  </div>
</div>   




<div class="row"> 
   <div class="contImg col-sm-1" ></div>
   <div class=" col-sm-5" ><h2><a data-toggle="collapse" href="#fifthSect">Historial Quirúrgico</a></h2></div>
</div>

<div class="row panel-collapse collapse" id="fifthSect">
  <div class="contImg col-sm-4" ></div>
  
  <div class="contImg col-sm-7" >
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
        <td>Extracción de 3er molar</td>
      </tr>
      <tr>
      </tr>
     </tbody>   
  </table>
  </div>
  </div>
</div>   

<div class="row"> 
   <div class="contImg col-sm-1" ></div>
   <div class=" col-sm-5" ><h2><a data-toggle="collapse" href="#sixthSect">Vacunas</a></h2></div>
</div>

<div class="row panel-collapse collapse" id="sixthSect">
  <div class="contImg col-sm-4" ></div>
  
  <div class="contImg col-sm-7" >
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
        <td>Hepatitis B</td>
      </tr>
      <tr>
        <td>Rotavirus</td>
      </tr>
      <tr>
        <td>Influenza</td>
      </tr>
     </tbody>   
  </table>
  </div>
  </div>
</div>   


<div class="row"> 
   <div class="contImg col-sm-1" ></div>
   <div class=" col-sm-5" ><h2><a data-toggle="collapse" href="#seventhSect">Historial Familiar</a></h2></div>
</div>

<div class="row panel-collapse collapse" id="seventhSect">
  <div class="contImg col-sm-4" ></div>
  
  <div class="contImg col-sm-7" >
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
        <td>Cáncer de próstata - Abuelo Materno</td>
      </tr>
     </tbody>   
  </table>
  </div>
  </div>
</div>   


</div>
<style type="text/css">

@media only screen and (max-width: 800px) {
    .table tr td {
         font-size: 10px;
    }
}
    .table tr td {
         font-size: 15px;
    }
</style>
<script>
  
</script>
@endsection
