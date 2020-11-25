@extends('admin.layout')
@section('title','Instituciones')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              Listado de Instituciones
            </h3>
            <div  style="text-align: right">
            <a href="{{route('institute.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Registrar</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>

              @foreach($institutes as $institute)
              <tr>
                <td>{{$institute->name}}</td>
                <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-md">
                        <a href="{{URL::to('admin/institute/edit')}}/{{$institute->id}}" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                        <a href="{{URL::to('admin/institute/delete')}}/{{$institute->id}}" onclick="mensaje()" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</a>
                        
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

