@extends('admin.layout')
@section('title','Crear Editorial')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Datos de la Editorial</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ URL::to('admin/editorial/store')}}" method="post">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group  {{$errors->has('editorialName') ? 'text-danger' : '' }} ">
                              <label for="title">Nombre del Editorial</label>
                              <input type="text" id="editorialName" 
                              name="editorialName" class="form-control  {{$errors->has('editorialName') ? 'is-invalid' : '' }}  "  
                              placeholder="Ingresar Nombre de la Editorial"
                              value="{{ old('editorialName')}}">
                              {!! $errors->first('editorialName','<span >El editorial es requerido</span>') !!}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                                <button type="submit" class="btn btn-success">Enviar</button>
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