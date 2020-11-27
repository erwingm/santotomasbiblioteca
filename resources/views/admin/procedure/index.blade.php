@extends('admin.layout')
@section('title','Tramites')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              Listado de Tramites
            </h3>
            <div  style="text-align: right">
            
            </div>
          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nivel de Estudio</th>
                <th>Distrito</th>
                <th>Insitituto</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>

              @foreach($procedures as $procedure)
              <tr>

                <td>{{$procedure->dni}}</td>
                <td>{{$procedure->name}}</td>
                <td>{{$procedure->last_name_one}} {{$procedure->last_name_two}}</td>
                <td>{{$procedure->level_study}}</td>
                <td>{{$procedure->distric}}</td>
                <td>{{$procedure->institute}}</td>
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

