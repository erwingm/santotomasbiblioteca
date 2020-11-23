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
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/shop-homepage.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/newtemplate.css')}}" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  @include('partials.nav')
  <section class="py-5">
    <div class="container" >
      <div class="row justify-content-center" >
        <div class="col-12 col-md-10 col-lg-8" >
            <form class="card card-sm" style="position: inherit;
            top: -75px; line-height: 1.15;" >
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
    </div>
    </div>
  </section>
  
<!-- Conteenido -->
<!-- Page Content -->
<section class="mt-5 container"><h4 class=" mb-4">
  Popular among our collections  <br> <small class="subtitle-section">Our library's line of collection that have been favoured by our users were shown here. Look for them. Borrow them. Hope you also like them</small></h4> <div class="flex flex-wrap"><a href="index.php?subject=&quot;Operating+System&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Operating System</a><a href="index.php?subject=&quot;Computer&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Computer</a><a href="index.php?subject=&quot;Linux&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Linux</a><a href="index.php?subject=&quot;Programming&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Programming</a><a href="index.php?subject=&quot;Website&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Website</a></div> <div class="flex flex-wrap mt-4 collection"><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=2" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Flinux_in_a_nutshell.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Linux In a Nutshell</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=16" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Fdepositphotos_162199054-stock-illustration-open-book-cartoon-vector-symbol.jpg.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">100 IDEAS PARA DIBUJAR</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=6" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Fpostgresql.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Invierte.PE</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=8" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Fajax.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Ajax : creating Web pages with asynchronous JavaScript and XML</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=7" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Fwebapp_arch.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Web application architecture : principles, protocols, and practices</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=11" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Finformation_arch.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Information Architecture for the World Wide Web: Designing Large-Scale Web Sites</div></div></a></div></div></section>
<section class="mt-5 container"><h4 class=" mb-4">
  Popular among our collections <br> <small class="subtitle-section">Our library's line of collection that have been favoured by our users were shown here. Look for them. Borrow them. Hope you also like them</small></h4> <div class="flex flex-wrap"><a href="index.php?subject=&quot;Operating+System&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Operating System</a><a href="index.php?subject=&quot;Computer&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Computer</a><a href="index.php?subject=&quot;Linux&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Linux</a><a href="index.php?subject=&quot;Programming&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Programming</a><a href="index.php?subject=&quot;Website&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Website</a></div> <div class="flex flex-wrap mt-4 collection"><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=2" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Flinux_in_a_nutshell.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Linux In a Nutshell</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=16" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Fdepositphotos_162199054-stock-illustration-open-book-cartoon-vector-symbol.jpg.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">100 IDEAS PARA DIBUJAR</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=6" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Fpostgresql.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Invierte.PE</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=8" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Fajax.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Ajax : creating Web pages with asynchronous JavaScript and XML</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=7" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Fwebapp_arch.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Web application architecture : principles, protocols, and practices</div></div></a></div><div class="w-48 pr-4 pb-4"><a href="index.php?p=show_detail&amp;id=11" class="card border-0 hover:shadow cursor-pointer text-decoration-none h-full"><div class="card-body"><div class="card-image fit-height"><img src="./lib/minigalnano/createthumb.php?filename=..%2F..%2Fimages%2Fdocs%2Finformation_arch.jpg&amp;width=120" class="img-fluid"></div><div class="card-text mt-2 text-grey-darker">Information Architecture for the World Wide Web: Designing Large-Scale Web Sites</div></div></a></div></div></section>
<section class="py-5">
  <div class="container">
    <h1>Contenido 2</h1>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <h1>Contenido 3</h1>
  </div>
</section>
{{-- <section class="py-5">
  <div class="container">
  </div>
</section> --}}

  <!-- Fin Contenido -->




    <!-- Footer -->
<footer class="py-5 bg-dark">
        <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
</footer>
  <!-- Bootstrap core JavaScript -->
  
  <script src="{{asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>

</html>


<style>
	.carousel-item {
	  height: 100vh;
	  min-height: 350px;
	  background: no-repeat center center scroll;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	</style>