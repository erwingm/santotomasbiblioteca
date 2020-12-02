@extends('admin.layout')
@section('title','Crear Usuarios')

@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Datos del Usuario</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('user.store')}}" method="post">
                @csrf
              
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group  {{$errors->has('name') ? 'text-danger' : '' }} ">
                              <label for="title">Nombre del Usuario</label>
                              <input type="text" id="name" 
                              name="name" class="form-control  {{$errors->has('name') ? 'is-invalid' : '' }}  "  
                              placeholder="Enter email"
                              value="{{ old('name')}}">
                              {!! $errors->first('name','<span >El nombre es requerido</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group  {{$errors->has('email') ? 'text-danger' : '' }} ">
                              <label for="title">E-mail</label>
                              <input type="text" id="email" 
                              name="email" class="form-control  {{$errors->has('email') ? 'is-invalid' : '' }}  "  
                              placeholder="Enter email"
                              value="{{ old('email')}}">
                              {!! $errors->first('email','<span >El nombre es requerido</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group  {{$errors->has('password') ? 'text-danger' : '' }} ">
                              <label for="title">E-mail</label>
                              <input type="password" id="password" 
                              name="password" class="form-control  {{$errors->has('password') ? 'is-invalid' : '' }}  "  
                              placeholder="Enter password"
                              value="{{ old('password')}}">
                              {!! $errors->first('password','<span >El password es requerido</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group  {{$errors->has('role') ? 'text-danger' : '' }} ">
                              <label for="title">Rol</label>
                              <select name="role" class="form-control" id="">
                                <option value="admin">Admin</option>
                                <option value="asistente">Asistente</option>
                              </select>
                              {!! $errors->first('role','<span >El password es requerido</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                 
                </form>
              </div>
              <!-- /.card -->
  

  
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

@endsection