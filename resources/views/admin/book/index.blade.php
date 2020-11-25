@extends('admin.layout')
@section('title','Libros')

@section('content')
<section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              Listado de Libros 
            </h3>
            <br>
            <h4>
            Total : 
            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-primary">{{$books->count()}}</span>
            </h4>
            <div  style="text-align: right">
            <a href="{{route('book.add')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Registrar</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Codigo</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Extracto</th>
                <th>Estado</th>
                <th>Vistas</th>
                <th>Cantidad</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach($books as $book)
              <tr>
                <td>{{$book->code}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->extract}}</td>
                <td>
                  @if($book->status == true)
                  <span class="badge badge-success">Disponible</span>
                  @else
                  <span class="badge badge-danger">No Disponible</span>
                  @endif
                </td>
                <td>{{$book->view_count}}</td>
                <td>{{$book->quantity}}</td>
                <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-md">
                        <a href="{{route('book.edit', $book->id)}}" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                        <button class="btn btn-danger" type="button" onclick="deleteBook({{$book->id}})">
                        <i  class="fa fa-trash"></i>Eliminar</button>
                        
                        <form id="delete-form-{{$book->id}}" 
                        action="{{route('book.destroy',$book->id)}}"
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
              <tr>
                <th>Codigo</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Extracto</th>
                <th>Estado</th>
                <th>Vistas</th>
                <th>Cantidad</th>
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
  @push('scripts')
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>

  function deleteBook(id){
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
