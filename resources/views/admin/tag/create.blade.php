@extends('admin.layout')
@section('title','Crear Etiquetas')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Datos de la Etiqueta</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ URL::to('admin/tag/store')}}" method="post">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="form-group  {{$errors->has('tagName') ? 'text-danger' : '' }} ">
                              <label for="title">Nombre de la Etiqueta</label>
                              <input type="text" id="tagName" 
                              name="tagName" class="form-control  {{$errors->has('tagName') ? 'is-invalid' : '' }}  "  
                              placeholder="Ingrese la Etiqueta"
                              value="{{ old('tagName')}}">
                              {!! $errors->first('tagName','<span >El nombre es requerido</span>') !!}
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                                <button type="submit" class="btn btn-success">Registrar</button>
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