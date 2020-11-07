@extends('admin.layout')
@section('title','Crear Libros')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
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
                        <div class="col-md-8">
                            <label>Nombre</label>
                            <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="col-sm-6">
                              <!-- select -->
                              <div class="form-group">
                                <label>Autor</label>
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
            <div class="col-md-4">
              <!-- general form elements disabled -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Datos Tecnicos del Libro</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form role="form">
                    <div class="row">
                      <div class="col-sm-10">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Cantidad</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-10">
                              <div class="form-group">
                                <label>Categorias</label>
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
                      <div class="col-sm-6">
                        <!-- checkbox -->
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Virtual</label>
                          </div>
                        </div>
                      </div> 
                    </div>
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

@endsection