@extends('admin.layout')
@section('title','Inicio')

@section('content')

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$books->count()}}</h3>

                <p>Total de Libros</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$all_views}}<sup style="font-size: 20px"></sup></h3>

                <p>Total de Visitas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$category_count}}</h3>

                <p>Total de Categorias</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$tag_count}}</h3>

                <p>Total de Etiquetas</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-3 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$new_procedures}}</h3>

                <p>Nuevos Tramite para Hoy</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
            <!-- /.card -->
            </section>
            <section class="col-lg-9 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Los Libros mas Vistos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Puesto</th>
                      <th>Titulo</th>
                      <th>Estado</th>
                      <th>view</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($popular_books as $key=>$book)
                    <tr>
                      <td><a href="pages/examples/invoice.html">{{$key + 1}}</a></td>
                      <td>{{str_limit($book->title,'20')}}</td>
                      <td>
                      @if($book->status == true)
                      <span class="badge badge-success">Disponible</span>
                      @else
                      <span class="badge badge-danger">No Disponible</span>
                      @endif
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{$book->view_count}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver Libros</a>
              </div>
              <!-- /.card-footer -->
            </div>
            </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
    
@endsection