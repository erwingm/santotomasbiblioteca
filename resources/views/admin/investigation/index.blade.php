@extends('admin.layout')
@section('title','Url de Investigación')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


      <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <a href="{{route('investigation.create')}}" class="btn btn-info">
              <i class="fas fa-plus"></i> Agregar Nueva Url</a>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>

              @foreach($investigations as $investigation)
              <tr>
                <td>{{$investigation->name}}</td>
                <td>{{$investigation->description}}</td>
                <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-md">
                        <a href="{{route('investigation.edit', $investigation->id)}}" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                        <a href="{{URL::to('admin/investigation/delete')}}/{{$investigation->id}}" onclick="mensaje()" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</a>
                        
                      </div>
                    </td>
              </tr>
              @endforeach

             
              
              </tbody>
              <tfoot>
             
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

