<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{request()->is('admin/category*') || request()->is('admin/tag*')? 'menu-open' : ''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Categoria
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('category.index')}}" class="nav-link {{request()->is('admin/category') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item active">
                <a href="{{route('category.create')}}" class="nav-link {{request()->is('admin/category/create')? 'active' : ''}}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item active">
                <a href="{{route('tag.create')}}" class="nav-link {{request()->is('admin/tag/create')? 'active' : ''}}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Etiquetas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ (request()->is('admin/distric*') || request()->is('admin/institute*') ? 'menu-open' : '')}}">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Distritos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('distric.index')}}" class="nav-link {{request()->is('admin/distric') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver Listados</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('distric.create')}}" class="nav-link {{request()->is('admin/distric/create') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('institute.create')}}" class="nav-link {{request()->is('admin/institute/create') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Instituciones</p>
                  </a>
                </li>
              </ul>
            </li>
          <li class="nav-item has-treeview {{ (request()->is('admin/book*') || request()->is('admin/editorial*') || request()->is('admin/author*') ? 'menu-open' : '')}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Libros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('book.index')}}" class="nav-link {{request()->is('admin/book') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('book.add')}}" class="nav-link {{request()->is('admin/book/create') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('editorial.index')}}" class="nav-link {{request()->is('admin/editorial') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editorial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('author.index')}}" class="nav-link {{request()->is('admin/author') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Autores</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview {{request()->is('admin/activity*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Actividades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('activity.index')}}" class="nav-link {{request()->is('admin/activity') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Actividades</p>
                </a>
              </li>
              <li class="nav-item active">
                <a href="{{route('activity.create')}}" class="nav-link {{request()->is('admin/activity/create')? 'active' : ''}}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Actividad</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




  