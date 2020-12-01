@extends('admin.layout')
@section('title','Crear Actividades')

@section('content')

<section class="content">
        <div class="container-fluid">
        <form action="{{ route('activity.update', $activity)}}" method="post">
        @csrf {{method_field('PUT')}}
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
                        placeholder="Ingrese el Título"
                        value="{{ old('title',$activity->title)}}">
                        {!! $errors->first('title','<span >El título es requerido</span>') !!}
                    </div>
                    <div class="form-group {{$errors->has('description') ? 'text-danger' : '' }} ">
                        <label for="description">Descripción</label>
                        <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : '' }} " 
                        name="description" id="description" 
                        cols="30" rows="10">{{old('description',$activity->description)}}</textarea>
                        {!! $errors->first('title','<span >El titulo es requerido</span>') !!}
                    </div>
                    </div>
              
                  
                  </div>
               
                 
                  <!-- /.card-body -->
              </div>
              <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Datos de la Actividad</h3>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label>Fecha de Publicación:</label>
                        <div class="input-group">
                        
                        <!-- Carbon\Carbon::parse($activity->published_at)->format('d-m-Y'))  -->
                            <input value="{{ old('published_at', $activity->published_at ? $activity->published_at->format('d-m-Y') : null) }}" name="published_at" size="16" type="text" class="form-control" id="datepicker" >
                    </div>
                    <div class="form-group" >
                        <label>Etiquetas</label>
                        <div class="select2-purple" >
                          <select name="tags[]" class="select2" 
                                  multiple="" 
                                  data-placeholder="Selecciona una o más etiquetas" 
                                  data-dropdown-css-class="select2-purple" style="width: 100%;" tabindex="-1" aria-hidden="true">
                            @foreach($tags as $tag)
                              <option {{ collect(old('tags', $activity->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} 
                              value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label>URL De Inscripción</label>
                          <input type="text" value="{{old('url_inscription',$activity->url_inscription)}}" name="url_inscription" class="form-control"  placeholder="Enter email">
                      </div>
                      <div class="form-group">
                          <label>URL De las Bases</label>
                          <input type="text" value="{{old('url_base',$activity->url_base)}}" name="url_base" class="form-control"  placeholder="Enter email">
                        
                      </div>
                      
                        <div class="form-group">
                        @if($activity->photos->count() >= 1)
                        <div style="display: none" class="dropzone" >
                           
                        </div>
                        @else
                        
                        <div class="dropzone" >
              
                        </div>
   
                        @endif
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
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box body">
            <div class="row">
                      @foreach($activity->photos as $photo)
                        <form action="{{ route('admin.photos.destroy', $photo) }}" method="POST">
                          @csrf
                          {{method_field('delete')}}
                          <div class="col-md-3">
                            <button class="btn btn-danger" style="position: absolute"><i class="fa fa-remove"></i></button>
                            <img width="200" height="200" class="img-responsive" src="{{ url($photo->url) }}" alt="">
                          </div>
                        </form>
                      @endforeach
                    </div>
            </div>
          </div>
        </div>
      </section>

@stop
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">

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
  

  <script>
    $(function(){
      $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        locale: 'es-es',
        format: 'd-m-yyyy'
    }),
     //Initialize Select2 Elements
     $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    });

 


    var myDropzone = new Dropzone('.dropzone',{

      
      url:'/admin/activity/{{$activity->url}}/photos',
      acceptedFiles: 'image/*',
      maxFilessize: 2,
      paramName: 'photo',
      addRemoveLinks: true,
      maxFiles: 1,
      headers: {
        'X-CSRF-TOKEN': '{{csrf_token()}}'
      },

    });

    myDropzone.on('error', function(file, res){
        var msg = res.errors.photo[0];
        $('.dz-error-message:last > span').text(msg);
    });
   

    Dropzone.autoDiscover = false;


  </script>


@endpush

