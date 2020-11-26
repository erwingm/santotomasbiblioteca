@extends('admin.layout')
@section('title','Autores')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
                <a href="{{route('objective.create')}}" class="btn btn-info"><i class="fas fa-plus"></i> Agregar</a>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Icono</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>

              @foreach($objectives as $objective)
              <tr>
                <td style="text-align:center;"><i class="{{$objective->icon}}"></i></td>
                <td>{{$objective->name}}</td>
                <td>{{$objective->description}}</td>
                <td></td>

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

