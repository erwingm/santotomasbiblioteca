@extends('admin.layout')
@section('title','Registrar Objetivos')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Objetivos de la Biblioteca</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('objective.update', $objective->id)}}" method="post">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Icono</label>
                            <input type="text" name="icon" value="{{$objective->icon}}" class="form-control"  placeholder="Ingrese el codigo para el icono">
                        </div>
                        <div class="col-md-6">
                            <label>Nombre</label>
                            <input type="text" name="name" value="{{$objective->name}}"  class="form-control"  placeholder="Ingrese el nombre">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-8">
                            <label>Descripcion</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$objective->description}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                                <button type="submit" class="btn btn-success">Enviar</button>
                                <a href="https://www.w3schools.com/icons/fontawesome_icons_webapp.asp" class="btn btn-primary" target="_blank">Visitar para mas Iconos</a>
                        </div>
                        
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                 
                </form>
              </div>
              <!-- /.card -->
  

  
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

@endsection