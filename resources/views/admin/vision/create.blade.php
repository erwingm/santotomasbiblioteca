@extends('admin.layout')
@section('title','Registrar Historia')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Registrar Visión | Misión</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('vision.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group  {{$errors->has('name') ? 'text-danger' : '' }} ">
                                  <label for="title">Título</label>
                                  <input type="text" id="name" 
                                  name="name" class="form-control  {{$errors->has('name') ? 'is-invalid' : '' }}  "  
                                  placeholder="Ingrese el Título"
                                  value="{{ old('name')}}">
                                  {!! $errors->first('name','<span >El Título es requerido</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group  {{$errors->has('image') ? 'text-danger' : '' }} ">
                                      <label for="title">Subir Imagen</label>
                                      <input type="file" id="image" 
                                      name="image" class="form-control  {{$errors->has('image') ? 'is-invalid' : '' }}  "  
                                      value="{{ old('image')}}">
                                      {!! $errors->first('image','<span >La Imagen es requerida</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-8">
                      <div class="form-group {{$errors->has('description') ? 'text-danger' : '' }} ">
                          <label for="title">Descripción</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}  ">{{ old('description')}}</textarea>
                            {!! $errors->first('description','<span >La Descripción es requerida</span>') !!}
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