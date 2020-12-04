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
                <form action="{{ route('objective.store')}}" method="post">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group  {{$errors->has('icon') ? 'text-danger' : '' }} ">
                                <label for="icon">Ingresar el codigo del icono</label>
                                <input type="text" id="icon" 
                                name="icon" class="form-control  {{$errors->has('icon') ? 'is-invalid' : '' }}  "  
                                placeholder="Ingrese el código del icono a usar"
                                value="{{old('icon')}}">
                                {!! $errors->first('icon','<span >La URL es requerida</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group  {{$errors->has('name') ? 'text-danger' : '' }} ">
                                <label for="name">Ingrese Título</label>
                                <input type="text" id="name" 
                                name="name" class="form-control  {{$errors->has('name') ? 'is-invalid' : '' }}  "  
                                placeholder="Ingrese el Título"
                                value="{{old('name')}}">
                                {!! $errors->first('name','<span >La URL es requerida</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-8">
                            <div class="form-group  {{$errors->has('description') ? 'text-danger' : '' }} ">
                                <label for="description">Descripción</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control {{$errors->has('description') ? 'is-invalid' : '' }} ">{{old('description')}}</textarea>
                                {!! $errors->first('description','<span >La URL es requerida</span>') !!}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                                <button type="submit" class="btn btn-success">Enviar</button>
                                <a href="https://www.w3schools.com/icons/fontawesome_icons_webapp.asp" class="btn btn-primary" target="_blank">Visitar para más Iconos</a>
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