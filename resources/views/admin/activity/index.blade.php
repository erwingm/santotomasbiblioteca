@extends('admin.layout')
@section('title','Actividades')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <!-- <a href="{{route('activity.create')}}" class="btn btn-info"><i class="fas fa-plus"></i> Agregar</a> -->
              <button class="btn btn-primary"data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>Agregar</button>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach($activities as $activity)
              <tr>
                <td>{{$activity->title}}</td>
                <td>{{$activity->description}}</td>
                <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-md">
                        <a  href="" class="btn btn-xs btn-default"><i class="fas fa-eye"></i></a>
                        <a  href="{{route('admin.activity.edit',$activity)}}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                        
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

  @push('scripts')
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ URL::to('admin/activity/store')}}" method="POST">
        @csrf
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="form-group  {{$errors->has('title') ? 'text-danger' : '' }} ">
                        <label for="title">Título de la publicación</label>
                        <input type="text" id="title" 
                        name="title" class="form-control  {{$errors->has('title') ? 'is-invalid' : '' }}  "  
                        placeholder="Enter email"
                        value="{{old('title')}}">
                        {!! $errors->first('title','<span >El titulo es requerido</span>') !!}
                    </div>
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button  class="btn btn-secondary">Crear</button>

            </div>
          </div>
        </div>

      </form>
      
      </div>

 
  @endpush


 
@endsection

