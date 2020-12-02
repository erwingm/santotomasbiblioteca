<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/img/AdminLTELogo.jpeg')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Biblioteca</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrador</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview {{request()->is('admin/*') || request()->is('admin/*')? 'menu-open' : ''}}">
            <a href="/admin" class="nav-link active">
              <i class="nav-icon 	fa fa-dashboard"></i>
              <p>
                Administración
                <i class="right"></i>
              </p>
            </a>
          </li>
          @if(Auth::user()->checkAdmin())
          <li class="nav-item has-treeview {{request()->is('admin/category*') || request()->is('admin/user*')? 'menu-open' : ''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon 	fa fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('user.index')}}" class="nav-link {{request()->is('admin/user*') ? 'active' : ''}}">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          <li class="nav-item has-treeview {{request()->is('admin/category*') || request()->is('admin/tag*')? 'menu-open' : ''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon 	fa fa-braille"></i>
              <p>
                Categoría
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('category.index')}}" class="nav-link {{request()->is('admin/category') ? 'active' : ''}}">
                  <i class="fa fa-folder-o nav-icon"></i>
                  <p>Categorías</p>
                </a>
              </li>
              <li class="nav-item active">
                <a href="{{route('tag.index')}}" class="nav-link {{request()->is('admin/tag')? 'active' : ''}}" >
                  <i class="fa fa-tag nav-icon"></i>
                  <p>Etiquetas</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ (request()->is('admin/distric*') || request()->is('admin/institute*') ? 'menu-open' : '')}}">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-bank"></i>
                <p>
                  Distritos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('distric.index')}}" class="nav-link {{request()->is('admin/distric') ? 'active' : ''}}">
                    <i class="fa fa-bank nav-icon"></i>
                    <p>Distritos</p>
                  </a>
                </li>
              </ul>
            </li>
          <li class="nav-item has-treeview {{ (request()->is('admin/book*') || request()->is('admin/editorial*') || request()->is('admin/author*') ? 'menu-open' : '')}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Libros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('book.index')}}" class="nav-link {{request()->is('admin/book*') ? 'active' : ''}}">
                  <i class="fa fa-book nav-icon"></i>
                  <p>Libros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('editorial.index')}}" class="nav-link {{request()->is('admin/editorial*') ? 'active' : ''}}">
                  <i class="fa fa-building-o nav-icon"></i>
                  <p>Editoriales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('author.index')}}" class="nav-link {{request()->is('admin/author*') ? 'active' : ''}}">
                  <i class="fa fa-group nav-icon"></i>
                  <p>Autores</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('admin/activity*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-newspaper-o"></i>
              <p>
                Actividades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('activity.index')}}" class="nav-link {{request()->is('admin/activity') ? 'active' : ''}}">
                  <i class="fa fa-newspaper-o nav-icon"></i>
                  <p>Ver Actividades</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('admin/investigation*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-mortar-board"></i>
              <p>
                Investigación
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('investigation.index')}}" class="nav-link {{request()->is('admin/investigation') ? 'active' : ''}}">
                  <i class="fa fa-mortar-board nav-icon"></i>
                  <p>Ver Links</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('admin/procedure*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon 	fa fa-id-card-o"></i>
              <p>
                Trámites
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('procedure.index')}}" class="nav-link {{request()->is('admin/procedure*') ? 'active' : ''}}">
                  <i class="fa fa-id-card-o nav-icon"></i>
                  <p>Ver Trámites</p>
                </a>
              </li>
            </ul>
          </li>

          <li  class="nav-item has-treeview {{request()->is('admin/story*') || request()->is('admin/vision*') || request()->is('admin/object*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Configuración
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('story.index')}}" class="nav-link {{request()->is('admin/story*') ? 'active' : ''}}">
                  <i class="	fa fa-window-maximize nav-icon"></i>
                  <p>Historia</p>
                </a>
              </li>
              <li class="nav-item active">
                <a href="{{route('vision.index')}}" class="nav-link {{request()->is('admin/vision*') ? 'active' : ''}} ">
                  <i class="fa fa-window-restore nav-icon"></i>
                  <p>Visión | Misión</p>
                </a>
              </li>
              </li>
              </li>
              <li class="nav-item active">
                <a href="{{route('objective.index')}}" class="nav-link {{request()->is('admin/object*') ? 'active' : ''}} ">
                  <i class="fa fa-sitemap nav-icon"></i>
                  <p>Objetivos</p>
                </a>
              </li>
              <li class="nav-item active">
                <a href="{{route('slider.index')}}" class="nav-link {{request()->is('admin/slider*') ? 'active' : ''}} ">
                  <i class="fa fa-file-image-o nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              </li>
            </ul>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




  