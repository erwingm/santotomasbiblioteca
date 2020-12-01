@extends('admin.layout')
@section('title','Crear Distritos')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Datos del Distrito</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ URL::to('admin/distric/store')}}" method="post">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="form-group  {{$errors->has('districName') ? 'text-danger' : '' }} ">
                              <label for="title">Nombre del Distrito</label>
                              <input type="text" id="districName" 
                              name="districName" class="form-control  {{$errors->has('districName') ? 'is-invalid' : '' }}  "  
                              placeholder="Ingrese Nombre del Distrito"
                              value="{{ old('districName')}}">
                              {!! $errors->first('districName','<span >El nombre es requerido</span>') !!}
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