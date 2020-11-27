@extends('layout2')
@section('content')

<section class="about-section">
	     <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 about-text">
                    <div class="section-heading space-overflow">
                        <h1 class="section-title"> <span>  {{$story[0]->name}}  </span> </h1>
                        <h4 class="section-description">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt ipsumaliqua. 
						</h4>
                    </div>
					<div class="space-t-40 space-b-40">
						<p> {{$story[0]->description}} </p>
					</div>
					
				</div>
  
                <div class="col-lg-6 col-md-12 about_img space-60">
                    <div class="about_img-inner">
                    <img  class="img-responsive thumbnail" src="{{ Storage::disk('public')->url('story/'.$story[0]->image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
	  </section>

    <section>
    <div class="post-slider text-white">
         <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            	<!-- Carousel Slide Indicators Navigation -->
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <img src="https://placeimg.com/1200/800/nature" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                           <h3>Mision</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                        <img src="https://placeimg.com/1200/800/nature" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                           <h3>Vision</h3>
                           
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                     </div>
                  </div>

               </div>
               <!-- Next and Pre arrow icons -->
               <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
    </section>
    <br>
    <section class="container pt-3 mb-3">
    <h2 class="h3 block-title text-center">Nuestros Objetivos</h2>
    <div class="container mt-5">
  <div class="row">
  @foreach($objectives as $objective)
        <div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
            <div class="card">
            <i class="{{$objective->icon}} objetivos"></i>
            <h3 class="objh3">{{$objective->name}}</h3>
            <p class="objp">{{$objective->description}}</p>
        </div>
    </div> 
@endforeach
  
  
  	
  	
  

  </div>         
</div>
</section>

<style>
     	.objetivos{
 		color: #1b73d2;
 		text-align: center;
 		padding: 30px;
 		font-size: 46px;
 	}
 	.card{
 		padding: 15px;
 		margin: 10px;
 		 box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.01);
    transition: box-shadow 0.3s ease-in-out;
    border:1px solid #ddd;
    cursor: pointer;
    border-radius: 4px;
 	}
 	.card:hover{
 		box-shadow: 0 5px 15px 2px rgba(0, 0, 0, 0.3);
 	}
 	.objh3{
 		text-align: center;
 		font-size: 22px;
 		color: #839192;
    font-weight: 600;

 	}
 	
 	.objp{
 		padding: 5px;
 		text-align: center;
 		font-size: 15px;
 		color: #839192;
 		line-height: 1.6;
    font-weight: 500;
    padding-top: 5px;
   
 	}
.how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 40%;
}

    
@import url('https://fonts.googleapis.com/css?family=Oswald|Raleway');
        .about-us {
            background: #f6f7f5;
        }

        .about-content {
            display: -ms-flexbox;
            display: flex;
            flex-direction: row;
            -ms-flex-direction: row;
        }

        .img-content {
            width: 50%;
            font-size: 0;
            line-height: 0;
            position: relative;
            letter-spacing: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 60% 50%;
            float: left;
            margin: 60px 30px 50px 20px;
        }

        .img-content img {
            min-width: 80%;
            min-height: 80%;
            height: auto;
            object-fit: cover;
            width: 100%;
        }

        .text-block .title {
            max-width: 80%;
            font-family: 'Oswald', sans-serif;
            font-size: 3rem;
            color: #3b3b3b;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .text-block p {
            margin-bottom: 40px;
            font-size: 18px;
            font-family: 'Raleway', sans-serif;
        }

        .text-block {
            padding: 80px 80px 60px 90px;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            width: 50%;
            padding: 50px 40px;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-direction: column;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        @media only screen and (max-width: 767px) {
            .about-content {
                flex-direction: column;
                -ms-flex-direction: column;
            }
            .img-content {
                width: 80%;
            }
            .text-block {
                width: 100%;
            }

        }



.about-section{
    background: linear-gradient(1deg, rgba(239, 239, 239, 0.4) 26%, rgb(245, 243, 255) 73%);
    padding:100px 0;
}
.section-title {
    color: #1b73d2;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 46px;
	padding-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}
.section-description {
    font-weight: 300;
    font-size: 25px;
    line-height: 36px;
    margin-bottom: 30px;
}
.custom-btn-nav{   
    background-image: -webkit-linear-gradient( -159deg, rgb(131,104,255) 0%, rgb(85,78,138) 100%);
    background-image: -ms-linear-gradient( -159deg, rgb(131,104,255) 0%, rgb(85,78,138) 100%);
    box-shadow: 0px 4px 20px 10px rgb(222, 219, 244);
    font-size: 17px;
    padding: 15px 30px;
    border: 0;
    border-radius: 37px;
    color: #fff;
}
.about-text p {
    line-height: 30px;
    color: #343333;
    font-weight: 500;
    font-size: 17px;
	margin-bottom: 50px;
}
.about_img-inner{
    margin: 0px 45px;
}
.about_img-inner:before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 47px;
    opacity: 0.8;
    transform: rotate(19deg);
    transform: rotate(-17deg);
    box-shadow: 4px 6px 38px #ccc;
    border-radius: 54px;
    background-color: hsla(0, 0%, 80%, 0.5098039215686274);
}
.about_img-inner img {
   
    position: relative;
    box-shadow: 4px 6px 5px #ccc;
    border-radius: 54px;
    margin: 0 auto;
    max-width: 120%;
    
}
.about_img-inner:after {
    content: '';
    position: absolute;
    left: 18px;
    right: 0;
    top: 25px;
    bottom: 0;
    transform: rotate(-15deg);
    box-shadow: 5px 6px 17px #ccc;
    border-radius: 54px;

}
.about_img-inner {
    position: relative;
    box-shadow: 4px 6px 35px #ccccccd1;
    border-radius: 54px;
    background: rgba(204, 204, 204, 0.4196078431372549);
}
.space-60{
    margin-top:60px;
}
       

@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800);
    .post-slider {
	padding: 80px 0px 100px;
	background-color: #1b73d2;
}
.post-slider .carousel-control-next, .carousel-control-prev {
	width: auto;
	top: 50%;
	bottom: initial;
}
.post-slider .carousel-control-prev {
	left: -40px;
}
.post-slider .carousel-control-next {
	right: -40px;
}
.post-slider .carousel-indicators {
	bottom: -70px;
}
.post-slider img {
	border-radius: 10px;
	border: 3px solid #ffffff;
}
.post-slider h3 {
	font-weight: 600;
	font-size: 28px;
	color: #FFEB3B;
	border-bottom: 2px solid #b39cdb;
	padding-bottom: 20px;
	margin-bottom: 20px;
	margin-top: 10px;
}
.post-slider .price {
	font-size: 20px;
	position: absolute;
	right: 20px;
	top: 12px;
}
.post-slider ul {
	list-style: none;
	padding: 0;
}
.post-slider ul li {
	padding-bottom: 10px;
}
.post-slider ul i {
	font-size: 18px;
	margin-right: 5px;
	color: #FFEB3B;
}
/*-- Responsive CSS --*/
@media (max-width: 767px) {
	.post-slider .carousel-control-prev {
		left: 0px;
	}
	.post-slider .carousel-control-next {
		right: 0px;
	}
	.post-slider h3 {
		font-size: 22px;
	}
	.post-slider .price {
		font-size: 18px;
		top: 12px;
	}
}
</style>
@endsection