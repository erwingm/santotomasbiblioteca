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
    <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="card-header">
                          <h3>asdasd</h3>
                    </div>
                    <div class="inner">
                        <img class="card-img-top" src="Stock/pexels-4.jpeg" alt="Card image cap">
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">Design</h5>
                      <p class="card-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                      </p>
                      
                      <a  href="" class="btn btn-xs btn-default"><i class="fa fa-download fa-2x" ></i></a>
                    </div>
                    <div class="card-footer">
                    
                      <a  href="" class="btn btn-xs btn-default"><i class="fa fa-eye fa-2x" ></i></a>
                      <a  href="" class="btn btn-xs btn-default"><i class="fa fa-download fa-2x" ></i></a>
                      <a href="#" class="btn btn-success">Learn More...</a>
                      
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                            <img class="card-img-top" src="Stock/pexels-5.jpeg" alt="Card image cap">
                    </div>
                    
                    <div class="card-body text-center">
                      <h5 class="card-title">Responsive</h5>
                      <p class="card-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                      </p>
                      <a href="#" class="btn btn-success">Learn More...</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                            <img class="card-img-top" src="Stock/pexels-3.jpeg" alt="Card image cap">
                    </div>
                    
                    <div class="card-body text-center">
                      <h5 class="card-title">UI/UX</h5>
                      <p class="card-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                      </p>
                      <a href="#" class="btn btn-success">Learn More...</a>
                    </div>
                  </div>
            </div>
        </div>


</section>


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