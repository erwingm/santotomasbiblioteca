@extends('admin.layout')
@section('title','Crear Libros')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-7">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Datos del Libro</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-7">
                              <label>Condigo</label>
                              <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                          <div class="col-md-5 ">
                              <label>Cantidad</label>
                              <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                          
  
                      </div>
                    <div class="row">
                        <div class="col-md-7">
                            <label>Nombre</label>
                            <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="col-sm-5">
                              <!-- select -->
                              <div class="form-group" >
                        <label>Autores</label>
                        <div class="select2-purple" >
                          <select name="tags[]" class="author" 
                                  multiple="" 
                                  data-placeholder="Selecciona una o más etiquetas" 
                                  data-dropdown-css-class="select2-purple" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                  @foreach($authors as $author)
                                    <option value="{{$author->id}}">{{$author->name}}</option>
                                  @endforeach
                          </select>
                        </div>
                      </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                              <!-- select -->
                              <div class="form-group" >
                        <label>Etiquetas</label>
                        <div class="select2-purple" >
                          <select name="tags[]" class="select2" 
                                  multiple="" 
                                  data-placeholder="Selecciona una o más etiquetas" 
                                  data-dropdown-css-class="select2-purple" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                  @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                  @endforeach
                          </select>
                        </div>
                      </div>
                        </div>
                        <div class="col-sm-5">
                            <!-- select -->
                            <div class="form-group">
                              <label>Editorial</label>
                              <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                              </select>
                            </div>
                      </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descripcion del Libro</label>
                                    <div class="mb-3">
                                        <textarea class="textarea" rows="5"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div>
                                  
                            </div>
                            <!-- /.col-->
                          </div>
                  </div>
                  <!-- /.card-body -->
  
                 
                </form>
              </div>
              <!-- /.card -->
  

  
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-5">
              <!-- general form elements disabled -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Datos Tecnicos del Libro</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form role="form">
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Paginas</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Categoria</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <div class="form-group" >
                        <label>Material</label>
                        <div class="select2-purple" >
                          <select name="tags[]" class="author" 
                                  multiple="" 
                                  data-placeholder="Selecciona una o más etiquetas" 
                                  data-dropdown-css-class="select2-purple" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                  @foreach($materials as $material)
                                    <option value="{{$material->id}}">{{$material->name}}</option>
                                  @endforeach
                          </select>
                        </div>
                      </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-10">
                      <div class="form-group">
                        <label>Resumen</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="form-group">
                        <label for="exampleInputFile">Subir Iamgen</label>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                            <span class="input-group-text" id="">Seleccionar</span>
                            </div>
                            
                      </div>

                    </div>
                    <div class="form-group">
                         <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </div>
                    
                    </div>
                  </div>
                  </div>

                  

                   
                           
                       
                  
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->

      </section>

      <h1>
        Agregar status
        AGREGAR DOWNLOAND BOTON
        AGREGAR VIEW DE VISITAS
        AGREGAR SI TIENE UNA EDICION VIRTUAL
        AGREGAR SLUG
        ANALIZAR status
        ANALIZAR IS_APPROVED
      </h1>


@endsection

@push('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" />
<link rel="stylesheet" href="{{'/backend/plugins/select2/css/select2.min.css'}}">
<link rel="stylesheet" href="{{'/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'}}">
@endpush

@push('scripts')
  <script>
  $(function(){
     //Initialize Select2 Elements
     $('.autores').select2();
     $('.select2').select2();
     $('.author').select2();



    });
    $(function(){
     //Initialize Select2 Elements
     $('.etiquetas').select2();



    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
  <!-- Select2 -->
  <script src="{{'/backend/plugins/select2/js/select2.full.min.js'}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>

@endpush