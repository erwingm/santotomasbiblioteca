@extends('admin.layout')
@section('title','Url de Investigación')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


      <div class="card">
          <div class="card-header">
            <h3 class="card-title">
                Registar Enlaces
            </h3>
            <div  style="text-align: right">
            <a href="{{route('investigation.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Registrar Enlaces</a>
            </div>
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
                        <button class="btn btn-danger" type="button" onclick="deleteInvestigation({{$investigation->id}})">
                        <i  class="fa fa-trash"></i>E</button>
                        
                        <form id="delete-form-{{$investigation->id}}" 
                        action="{{route('investigation.destroy',$investigation->id)}}"
                        method="POST">
                          @csrf
                          @method('DELETE')
                        </form>
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

  @push('scripts')
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>

  function deleteInvestigation(id){
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    event.preventDefault();
    document.getElementById('delete-form-'+id).submit();
  }else if (
    result.dismiss == swal.DismissReason.cancel
  ){
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )

  }
})
  }
  

  </script>



  

@endpush


 
@endsection

