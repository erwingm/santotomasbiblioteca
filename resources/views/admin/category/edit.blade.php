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
                  <h3 class="card-title">Editar Categoria</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ URL::to('admin/category/update')}}/{{$category->id}}" method="post">
                @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label>Nombre</label>
                            <input type="text" name="categoryName" value="{{$category->name}}" class="form-control"  placeholder="Enter email">
                        </div>

                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <div class="mb-3">
                                        <textarea class="textarea" name="categoryDescription"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$category->description}}</textarea>
                                    </div>
                                </div>
                                  
                            </div>
                            <!-- /.col-->
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-success">Actualizar</button>
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