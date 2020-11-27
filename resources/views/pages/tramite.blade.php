@extends('layout2')
@section('content')

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<div class="blog-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-9 blog-left">
					<ul class="bolg-post-list">
          <br>
<div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Reglas de Tramite</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.
						</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Tramite para la obtencion del Carnet</h4>
                <form action="{{route('pages.procedure.store')}}" method="POST" >
                  @csrf
					  <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="dni" placeholder="DNI" class="form-control" type="text">
                        </div>
						<div class="form-group col-md-6">
                          <input id="Full Name" name="name" placeholder="Nombre" class="form-control" type="text">
                        </div>
                      </div>
					  <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="last_name_one" placeholder="Apellido Paterno" class="form-control" type="text">
                        </div>
						<div class="form-group col-md-6">
                          <input id="Full Name" name="last_name_two" placeholder="Apellido Materno" class="form-control" type="text">
                        </div>
                      </div>

                    <div class="form-row">
					<div class="form-group col-md-6">
                                  <select name="distric" id="inputState" class="form-control">
                                    <option selected>Seleccione su Distrito</option>
                                    @foreach($districs as $distric)
                                    <option value="{{$distric->id}}">{{$distric->name}}</option>
                                    @endforeach
                                  </select>
                        </div>
                        <div class="form-group col-md-6">
                                  <select name="level_study" id="inputState" class="form-control" placeholder="Nivel de Estudio">
                                    <option selected>Nivel de Estudios</option>
                                    <option>Inicial</option>
                                    <option>Primaria</option>
                                    <option>Secundaria</option>
                                    <option>Superior</option>
                                    <option>Otros</option>
                                  </select>
                        </div>
                    </div>
					<div class="form-row">
          <div class="form-group col-md-10">
                          <input id="Full Name" name="institute" placeholder="Colegio" class="form-control" type="text">
                        </div>
                    </div>
					<br>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-outline-primary waves-effect">Enviar Datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<br>
</ul>
</div>
		
	
@include('partials.sidebar')

<style>
 .bg-primary {
  background-color: #1b73d2!important;
}
</style>	
@stop


