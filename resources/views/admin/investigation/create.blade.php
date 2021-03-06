@extends('admin.layout')
@section('title','Crear Actividades')

@section('content')

<section class="content">
        <div class="container-fluid">
        <form action="{{ route('investigation.store')}}" method="POST" enctype="multipart/form-data">
        @csrf {{ method_field('POST') }}
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">URL de Bases de Datos de Investigación</h3>
              </div>
                <!-- /.card-header -->
                <!-- form start -->
                
                  <div class="card-body">
                    <div class="form-group  {{$errors->has('name') ? 'text-danger' : '' }} ">
                        <label for="name">Ingresar URL</label>
                        <input type="text" id="name" 
                        name="name" class="form-control  {{$errors->has('name') ? 'is-invalid' : '' }}  "  
                        placeholder="Ingrese URL"
                        value="{{old('name')}}">
                        {!! $errors->first('name','<span >La URL es requerida</span>') !!}
                    </div>
                    <div class="form-group {{$errors->has('description') ? 'text-danger' : '' }} ">
                        <label for="description">Descripción</label>
                        <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : '' }} " 
                        name="description" id="description" 
                        cols="30" rows="10">{{old('description')}}</textarea>
                        {!! $errors->first('description','<span >La Descripción es requerida</span>') !!}
                    </div>
                    
                    </div>
                  
                  </div>
                  <!-- /.card-body -->
              </div>
              <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Imagen</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                          <div class="form-group  {{$errors->has('image') ? 'text-danger' : '' }} ">
                              <label for="title">Subir Imagen</label>
                              <input type="file" id="image" 
                              name="image" class="form-control {{$errors->has('image') ? 'is-invalid' : '' }}  "  
                              value="{{ old('image')}}">
                              {!! $errors->first('image','<span >La Imagen es requerida</span>') !!}
                            </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-9">
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </div>
                        <div class="col-md-3">
                          <a href="{{route('investigation.index')}}" class="btn btn-danger"><i class="fa fa-mail-reply-all"></i> Atrás</a>
                        </div>
                         
                        </div>
                      </div>
                </div>
                    </div>
                </div>
            </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
        </form>
      </section>

@stop
@push('styles')

<!-- daterange picker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" />
<link rel="stylesheet" href="{{'/backend/plugins/select2/css/select2.min.css'}}">
<link rel="stylesheet" href="{{'/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'}}">

@endpush

@push('scripts')
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
  <!-- Select2 -->
  <script src="{{'/backend/plugins/select2/js/select2.full.min.js'}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>

  

@endpush

