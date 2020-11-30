@extends('admin.layout')
@section('title','Crear Libros')

@section('content')



<section class="content">
<div class="form-group">
        <!-- Vertical Layout | With Floating Label -->
<a href="{{ route('book.index') }}" class="btn btn-danger waves-effect">Ir a Registros</a>
@if($book->status == false)
    <button type="button" class="btn btn-success waves-effect pull-right" >
        <i class="fa fa-check">Estado</i>
        <span>No Disponible</span>
    </button>
@else
    <button type="button" class="btn btn-success pull-right" disabled>
        <i class="fa fa-check"></i>
        <span>Disponible</span>
    </button>
@endif
</div>
        <hr>
        <div class="container-fluid">

          <div class="row">
            <!-- left column -->
            <div class="col-md-7">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Titulo :  {{ $book->title }}  |  Codigo: {{$book->code}}</h3>
                </div>
                  <div class="card-body">
                  {!! $book->description !!}
                  </div>
                  <div class="card-footer">
                  {!! $book->extract !!}
                  <div>
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">Paginas : {{$book->page}}</span>
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">Stock :{{$book->quantity}}</span>
                    
                  </div>
                  </div>

              </div>
            </div>

            <div class="col-md-5">
              <!-- general form elements disabled -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Datos Tecnicos del Libro</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                            <label for="exampleInputFile">Subir Iamgen</label>
                            <div class="input-group">
                            <img style="width:610px;height:300px;" class="img-responsive thumbnail" src="{{ Storage::disk('public')->url('book/'.$book->image) }}" alt="">
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="">Ubicacion del Archivo</label>
                        </div>
                    </div>
                    </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">
                  <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                        <h3 class="card-title">Autores</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                <div class="input-group">
                                    @foreach($book->authors as $author)
                                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">{{ $author->name }}</span>
                                    @endforeach
                                </div> 
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                        <h3 class="card-title">Etiquetas</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                    @foreach($book->tags as $tag)
                                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">{{ $tag->name }}</span>
                                    @endforeach
                                    </div> 
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                
                    <div class="row">
                    <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                        <h3 class="card-title">Material</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                <div class="input-group">
                                    @foreach($book->materials as $material)
                                    <span data-toggle="tooltip" class="badge bg-success"> {{ $material->name }} </span>
                                    @endforeach
                                    </div>
                                </div>      
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                        <h3 class="card-title">Categoria | Editorial</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Categoria : {{$book->category->name}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Editorial : {{$book->editorial->name}} </label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Descarga : {{$book->donwload}} </label>
                                </div>
                                
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                        
                        
                    </div>                   
            </div>
            
            </div>

          </div>
         
        </div><!-- /.container-fluid -->
        

      </section>

@endsection

@push('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" />
<link rel="stylesheet" href="{{'/backend/plugins/select2/css/select2.min.css'}}">
<link rel="stylesheet" href="{{'/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'}}">
@endpush

@push('scripts')
 
      <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
        function approvePost(id) {
            swal({
                title: 'Are you sure?',
                text: "You went to approve this post ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, approve it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('approval-form').submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'The post remain pending :)',
                        'info'
                    )
                }
            })
        }
    </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
  <!-- Select2 -->
  <script src="{{'/backend/plugins/select2/js/select2.full.min.js'}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>

@endpush