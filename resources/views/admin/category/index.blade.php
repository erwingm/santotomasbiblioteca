@extends('admin.layout')
@section('title','Categorias')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
            <button  class="btn btn-primary btn-md">
            <i class="fas fa-plus"></i> Agregar</button>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>

              @foreach($categories as $category)
              <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-md">
                        <a href="{{URL::to('admin/category/edit')}}/{{$category->id}}" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                        <a href="{{URL::to('admin/category/delete')}}/{{$category->id}}" onclick="mensaje()" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                        
                      </div>
                    </td>
              </tr>
              @endforeach

             
              
              </tbody>
              <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>

  <script>

  function  mensaje(){

    var check = confirm("deseas eliminar este dato");
    if(check){
      return true
    }
    return false;
  }

  </script>


 
@endsection

