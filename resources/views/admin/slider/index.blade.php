@extends('admin.layout')
@section('title','Slider')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">


      <div class="card">
          <div class="card-header">
            <h3 class="card-title">
                Registar Sliders
            </h3>
            <div  style="text-align: right">
            <a href="{{route('slider.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Registrar</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>

              @foreach($sliders as $slider)
              <tr>
                <td>{{$slider->name}}</td>
                <td>{{$slider->description}}</td>
                <td ><img height="100" width="100" class="img-responsive thumbnail" src="{{ Storage::disk('public')->url('slider/'.$slider->image) }}" alt=""></td>
                <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-md">
                        <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                        <button class="btn btn-danger" type="button" onclick="deleteSlider({{$slider->id}})">
                        <i  class="fa fa-trash"></i>Eliminar</button>
                        
                        <form id="delete-form-{{$slider->id}}" 
                        action="{{route('slider.destroy',$slider->id)}}"
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

  function deleteSlider(id){
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

