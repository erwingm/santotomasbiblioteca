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
                  <h3 class="card-title">Historia de la Biblioteca</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('story.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Titulo</label>
                            <input type="text" name="name" class="form-control"  placeholder="Ingrese el codigo para el icono">
                        </div>
                        <div class="col-md-6">
                            <label>Subir Imagen</label><br>
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-8">
                    <label>Descripcion</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
   
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