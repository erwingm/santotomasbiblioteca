@extends('admin.layout')
@section('title','Crear Categoria')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Datos de la Categoria</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ URL::to('admin/category/store')}}" method="post">
                @csrf
              
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group  {{$errors->has('categoryName') ? 'text-danger' : '' }} ">
                              <label for="title">Nombre de la categoria</label>
                              <input type="text" id="categoryName" 
                              name="categoryName" class="form-control  {{$errors->has('categoryName') ? 'is-invalid' : '' }}  "  
                              placeholder="Enter email"
                              value="{{ old('categoryName')}}">
                              {!! $errors->first('categoryName','<span >El nombre es requerido</span>') !!}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                            <div class="col-md-12">
                            <div class="form-group  {{$errors->has('categoryDescription') ? 'text-danger' : '' }} ">
                                <label for="title">Descripción</label>
                                <textarea name="categoryDescription" class="form-control  {{$errors->has('categoryDescription') ? 'is-invalid' : '' }}  "  id="" cols="30" rows="10">{{ old('categoryDescription')}}</textarea>
                                {!! $errors->first('categoryDescription','<span >El titulo es requerido</span>') !!}
                              </div>
                                  
                            </div>
                            <!-- /.col-->
                    </div>
                    <div class="row">
                        
                        <button type="submit" class="btn btn-success">Enviar</button>
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