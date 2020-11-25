@extends('admin.layout')
@section('title','Distritos')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              Listado de Distritos
            </h3>
            <div  style="text-align: right">
            <a href="{{route('distric.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Registrar</a>
            </div>
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

              @foreach($districs as $distric)
              <tr>
                <td>{{$distric->name}}</td>
                <td>{{$distric->description}}</td>
                <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-md">
                        <a href="{{URL::to('admin/distric/edit')}}/{{$distric->id}}" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                        <a href="{{URL::to('admin/distric/delete')}}/{{$distric->id}}"  class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</a>
                        
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

