@extends('admin.layout')
@section('title','Editar Etiqueta')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Editar Etiqueta</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('tag.update', $tag->id)}}" method="post">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="form-group  {{$errors->has('tagName') ? 'text-danger' : '' }} ">
                              <label for="title">Nombre de la categoria</label>
                              <input type="text" id="tagName" 
                              name="tagName" class="form-control  {{$errors->has('tagName') ? 'is-invalid' : '' }}  "  
                              placeholder="Ingresar Nombre de la Etiqueta"
                              value="{{ old('tagName',$tag->name)}}">
                              {!! $errors->first('tagName','<span >El nombre es requerido</span>') !!}
                            </div>
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    <button type="submit" class="btn btn-success">Actualizar</button>
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