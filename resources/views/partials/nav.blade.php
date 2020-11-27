
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Biblioteca Municipal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Inicio
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('page.information')}}">Nosotros</a>
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" 
            data-toggle="dropdown" href="#" role="button" 
            aria-haspopup="true" aria-expanded="false">Libros</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Digitales</a>
              <a class="dropdown-item" href="#">Físicos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('page.activity')}}">Actividades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pages.tramite')}}">Trámites</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pages.investigation')}}">Investigación</a>
          </li>
         


        </ul>
      
      </div>

    </div>
  </nav>
  

  


