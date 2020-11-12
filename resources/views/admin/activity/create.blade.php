@extends('admin.layout')
@section('title','Crear Actividades')

@section('content')

<section class="content">
        <div class="container-fluid">
        <form action="{{ URL::to('admin/activity/store')}}" method="post">
        @csrf
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Datos de la Actividad</h3>
              </div>
                <!-- /.card-header -->
                <!-- form start -->
                
                  <div class="card-body">
                    <div class="form-group  {{$errors->has('title') ? 'text-danger' : '' }} ">
                        <label for="title">Título de la publicación</label>
                        <input type="text" id="title" 
                        name="title" class="form-control  {{$errors->has('title') ? 'is-invalid' : '' }}  "  
                        placeholder="Enter email"
                        value="{{old('title')}}">
                        {!! $errors->first('title','<span >El titulo es requerido</span>') !!}

                        
                    </div>
                    <div class="form-group {{$errors->has('description') ? 'text-danger' : '' }} ">
                        <label for="description">Descripcion</label>
                        <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : '' }} " 
                        name="description" id="description" 
                        cols="30" rows="10">{{old('description')}}</textarea>
                        {!! $errors->first('title','<span >El titulo es requerido</span>') !!}
                    </div>
                    
                    </div>
                  
                  </div>
                  <!-- /.card-body -->
              </div>
              <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Datos de la Categoria</h3>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label>Fecha de Publicación:</label>
                        <div class="input-group">
                            <input size="16" type="text" class="form-control" id="datepicker" >
                    </div>
                    <div class="form-group" data-select2-id="47">
                        <label>Etiquetas</label>
                        <div class="select2-purple" data-select2-id="37">
                          <select name="tags[]" class="select2 select2-hidden-accessible" 
                                  multiple="" 
                                  data-placeholder="Selecciona una o más etiquetas" 
                                  data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                            @foreach($tags as $tag)
                              <option {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }} 
                              value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label>URL De Inscripción</label>
                          <input type="text" name="urlInscription" class="form-control"  placeholder="Enter email">
                      </div>
                      <div class="form-group">
                          <label>URL De las Bases</label>
                          <input type="text" name="urlBase" class="form-control"  placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <div class="dropzone">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">

                          </div>
                        </div>
                          <button type="submit" class="btn btn-primary btn-block">Enviar</button>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" />
<link rel="stylesheet" href="{{'/backend/plugins/select2/css/select2.min.css'}}">
<link rel="stylesheet" href="{{'/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'}}>
@endpush
@push('scripts')
  
  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
  <!-- Select2 -->
  <script src="{{'/backend/plugins/select2/js/select2.full.min.js'}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
  {{-- <script src="{{asset('backend/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script> --}}

  <script>
    $(function(){
      $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        locale: 'es-es',
        format: 'dd/mm/yyyy'
    }),
     //Initialize Select2 Elements
     $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    });

    new Dropzone('.dropzone',{
      url:'/',
      dictDefaultMessage: 'Arrastra las Footos aqui para subirloas',
    });

    Dropzone.autoDiscover = false;
   

  </script>


@endpush

