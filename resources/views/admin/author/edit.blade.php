@extends('admin.layout')
@section('title','Editar Autor')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Editar Autor</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ URL::to('admin/author/update')}}/{{$author->id}}" method="post">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group  {{$errors->has('authorName') ? 'text-danger' : '' }} ">
                              <label for="title">Nombre del Autor</label>
                              <input type="text" id="authorName" 
                              name="authorName" class="form-control  {{$errors->has('authorName') ? 'is-invalid' : '' }}  "  
                              placeholder="Nombre del Autor"
                              value="{{ old('authorName',$author->name)}}">
                              {!! $errors->first('authorName','<span >El nombre es requerido</span>') !!}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <a href="{{route('author.index')}}" class="btn btn-danger">Atras</a>
                            </div>
    
                        </div>

                    </div>
                    <br>
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