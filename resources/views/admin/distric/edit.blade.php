@extends('admin.layout')
@section('title','Editar Categoria')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Editar Distrito</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ URL::to('admin/distric/update')}}/{{$distric->id}}" method="post">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="form-group  {{$errors->has('districName') ? 'text-danger' : '' }} ">
                              <label for="title">Editar El Distrito</label>
                              <input type="text" id="districName" 
                              name="districName" class="form-control  {{$errors->has('districName') ? 'is-invalid' : '' }}  "  
                              placeholder="Enter email"
                              value="{{ old('districName',$distric->name)}}">
                              {!! $errors->first('districName','<span >El nombre es requerido</span>') !!}
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
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