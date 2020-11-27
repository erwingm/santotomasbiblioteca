@extends('admin.layout')
@section('title','Editar Editorial')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Editar Editorial</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ URL::to('admin/editorial/update')}}/{{$editorial->id}}" method="post">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label>Nombre</label>
                            <input type="text" name="editorialName" value="{{$editorial->name}}" class="form-control"  placeholder="Enter email">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-5">
                      <button type="submit" class="btn btn-success">Actualizar</button>
                      </div>
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