
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
                <h4 class="pb-4">Please fill with your details</h4>
                <form>
					  <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="name" placeholder="DNI" class="form-control" type="text">
                        </div>
						<div class="form-group col-md-6">
                          <input id="Full Name" name="name" placeholder="Nombre" class="form-control" type="text">
                        </div>
                      </div>
					  <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="name" placeholder="Apellido Paterno" class="form-control" type="text">
                        </div>
						<div class="form-group col-md-6">
                          <input id="Full Name" name="name" placeholder="Apellido Materno" class="form-control" type="text">
                        </div>
                      </div>

                    <div class="form-row">
					<div class="form-group col-md-6">
                                  <select id="inputState" class="form-control">
                                    <option selected>Distrito</option>
                                    <option> New Buyer</option>
                                    <option> Auction</option>
                                    <option> Complaint</option>
                                    <option> Feedback</option>
                                  </select>
                        </div>
                        <div class="form-group col-md-6">
                                  <select id="inputState" class="form-control">
                                    <option selected>Centro de Estudios</option>
                                    <option> New Buyer</option>
                                    <option> Auction</option>
                                    <option> Complaint</option>
                                    <option> Feedback</option>
                                  </select>
                        </div>
                    </div>
					<div class="form-row">
					<div class="form-group col-md-6">
                                  <select placeholder="Nivel De Estudio" id="inputState" class="form-control">
                                    <option selected>Nivel De Estudi222o</option>
                                    <option> New Buyer</option>
                                    <option> Auction</option>
                                    <option> Complaint</option>
                                    <option> Feedback</option>
                                  </select>
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
                        <button type="button" class="btn btn-danger">Enviar Datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<br>
</ul>
</div>
				
@include('partials.sidebar')
@stop
