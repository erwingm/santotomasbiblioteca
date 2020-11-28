<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>
  @toastr_css
  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  

  <!-- Ionicons --> 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/shop-homepage.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/newtemplate.css')}}" rel="stylesheet">

  

</head>

<body>

  @include('slider.slider')
  <!-- Navigation -->
  @include('partials.nav')

  
  
  <!-- Conteenido -->
  @yield('content')

<!-- Page Content -->
<section class="mt-5 container">
<h4 class=" mb-4">
  Listado de Libros Mas Vistos<br> 
  <small class="subtitle-section"></small>
  </h4> <div class="flex flex-wrap">
    <a href="index.php?subject=&quot;Operating+System&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Operating System</a>
    <a href="index.php?subject=&quot;Computer&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Computer</a>
    <a href="index.php?subject=&quot;Linux&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Linux</a>
    <a href="index.php?subject=&quot;Programming&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Programming</a>
    <a href="index.php?subject=&quot;Website&quot;&amp;search=search" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2">Website</a>
    </div>
    <br>

</div>

</section>

<div class="container">

<div class="row">
@foreach($books as $book)
<div class="col-md-3">
	<figure class="card card-product">
		<div class="img-wrap"> 
			<img src="{{ Storage::disk('public')->url('book/'.$book->image) }}">
		</div>
		<figcaption class="info-wrap">
			<h6 class="title text-dots"><a href="#">{{$book->title}}</a></h6>
			<div class="action-wrap">
				<a href="#" class="btn btn-primary btn-sm float-right"> Ver Libro </a>
				<div class="price-wrap h5">
					<span class="price-new"><i class="fa fa-eye"> </i> 0</span>
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
@endforeach

</div> <!-- row.// -->


</div> 
<!--container end-->




    <!-- Footer -->
    <footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Heading 1</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Payment Center</a></li>
            <li><a href="#">Contact Directory</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="#">News and Updates</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Heading 2</h4>
          <ul class="list-unstyled">
            <li><a href="#">Website Tutorial</a></li>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Webmaster</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Heading 3</h4>
          <ul class="list-unstyled">
            <li><a href="#">Parks and Recreation</a></li>
            <li><a href="#">Public Works</a></li>
            <li><a href="#">Police Department</a></li>
            <li><a href="#">Fire</a></li>
            <li><a href="#">Mayor and City Council</a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    	<div class="col-md-3">
    		<h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>				
		</div>
    </div>
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2018 - Company Name.  All rights reserved.</p>
		</div>
	</div>


  </div>
  </div>
</footer>
  <!-- Bootstrap core JavaScript -->

  <script src="{{asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://use.fontawesome.com/b0ab2e418a.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  
  <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>


</body>

</html>
<script>
$('.dropdown-toggle').dropdown();
</script>
<style>

.card-product:after {
    content: "";
    border:0;
    display: table;
    clear: both;
    visibility: hidden; }
  .card-product .price-new, .card-product .price {
    margin-right: 5px;
    border:0; }
  .card-product .price-old {
    color: #999;
    border:0; }
  .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    border:0;
    text-align: center; }
    .card-product .img-wrap img {
      max-height: 100%;
      max-width: 100%;
      border:0;
      object-fit: cover; }
      
      .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border:0;
    border-top: 1px solid #eee; }
  .card-product .action-wrap {
    padding-top: 4px;
    border:0;
    margin-top: 4px; }
  .card-product .bottom-wrap {
    padding: 15px;
    border:0;
    border-top: 1px solid #eee; }
  .card-product .title {
    margin-top: 0; }




	.carousel-item {
	  height: 50vh;
	  min-height: 350px;
	  background: no-repeat center center scroll;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
  }
  
/*FOOTER*/

footer {
  background: #1b73d2;
  background: -webkit-linear-gradient(59deg, #1b73d2, #1b73d2);
  background: linear-gradient(59deg, #1b73d2, #1b73d2);
  color: white;
  margin-top:100px;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
}

.custom-padding {
	padding: 45px 0;
}
img {
	max-width: 100%;
  height: auto;
  padding-left: 28px;
}
.socials a {
	line-height: 30px;
	text-align: center;
	border-radius: 50%;
	margin: 5px;
	color: #fff;
	display: inline-block;
	border: 1px solid #fff;
	height: 30px;
	width: 30px;

}
.team-area h3 {
	text-align: center;
	font-weight: 800;
	margin-top: 15px;
	color: #000;
}
.team-area h3 span {
	color: chocolate;
	display: block;
	font-weight: 300;
	margin-top: 5px;
	font-size: 16px;
	text-transform: uppercase;
}
.socials {
	margin-top: -27px;
	position: relative;
	z-index: 2;
	border-radius: 25px;
	background: orange;
	text-align: center;
	padding: 5px;
	margin-left: 25px;
	margin-right: 25px;
}
.socials a:hover {
	background: #fff;
	color: #000;
	transition: .7s;
}
@media only screen and (max-width: 767px) {
	.team-area {
		margin-bottom: 30px;
	}
	.team-area img {
		width: 100%;
	}
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
	.team-area {
		margin-bottom: 30px;
	}
	.team-area img {
		width: 100%;
	}
}

/*SOCİAL İCONS*/

/* footer social icons */

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoLinkedin:hover {
  background-color: #007bb7;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoLinkedin:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}

	</style>