<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/shop-homepage.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/card.css')}}" rel="stylesheet">
  

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="display-4">Full Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
  </div>
</section>

  <!-- Page Content -->
  <div class="container mt-40">
    <h3 class="text-center">Hover Effect Style : Demo - 20</h3>

    <div class="row mt-30">
            <div class="col-sm-3 col-md-6">

                    <h1 class="my-4">Shop Name</h1>
                    <div class="list-group">
                      <a href="#" class="list-group-item">Category 1</a>
                      <a href="#" class="list-group-item">Category 2</a>
                      <a href="#" class="list-group-item">Category 3</a>
                    </div>
            
                  </div>
        <div class="col-sm-12 col-md-6">
                <div class="box20 blue">
                <img src="https://blog.invervemarketing.com/hubfs/IMS/sectors-sample1.jpg" alt="">
                <div class="box-content">
                    <i class="fas fa-university circle-icon"></i>
                    <h3 class="title">Permanent modular classrooms, additions and schools</h3>
                    <p><a class="button" href="/more">Learn More</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="box20 red">
                <img src="https://blog.invervemarketing.com/hubfs/IMS/sectors-sample2.jpg" alt="">
                <div class="box-content">
                    <i class="fas fa-graduation-cap circle-icon"></i>
                    <h3 class="title">Temporary modular classrooms, additions and schools</h3>
                    <p><a class="button" href="/more">Learn More</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">

            <div class="box20 yellow">
                <img src="https://blog.invervemarketing.com/hubfs/IMS/sectors-sample3.jpg" alt="">
                <div class="box-content">
                    </i>
                    <h2 class="title">Offices, finance, retail and training services
                        Offices, finance, retail and training services
                        Offices, finance, retail and training services
                        Offices, finance, retail and training services
                    </h2>
                    <p><a class="button" href="/more">Learn More</a> 
                        <a class="button" href="/more">Learn More</a></p>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="box20 blue">
                <img src="https://blog.invervemarketing.com/hubfs/IMS/sectors-sample2.jpg" alt="">
                <div class="box-content">
                    <i class="fas fa-city circle-icon"></i>
                    <h3 class="title">Offices, clinics, classrooms and specialty buildings</h3>
                    <p><a class="button" href="/more">Learn More</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="box20 red">
                <img src="https://blog.invervemarketing.com/hubfs/IMS/sectors-sample1.jpg" alt="">
                <div class="box-content">
                    <i class="fas fa-clinic-medical circle-icon"></i>
                    <h3 class="title">Hospitals, clinics, dialysis and imaging suites</h3>
                    <p><a class="button" href="/more">Learn More</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="box20 yellow">
                <img src="https://blog.invervemarketing.com/hubfs/IMS/sectors-sample3.jpg" alt="">
                <div class="box-content">
                    <i class="fas fa-hotel circle-icon"></i>
                    <h3 class="title">Custom building designs to fit any need</h3>
                    <p><a class="button" href="/more">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- /.container -->
  
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
  <!-- Contenido -->

      

  <!-- Fin COntenido -->
  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>

