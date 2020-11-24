@extends('layout2')
@section('content')

<section class="about-section">
	     <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 about-text">
                    <div class="section-heading space-overflow">
                        <h1 class="section-title"> <span>  About Us  </span> </h1>
                        <h4 class="section-description">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt ipsumaliqua. 
						</h4>
                    </div>
					<div class="space-t-40 space-b-40">
						<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.Sed ut perspiciatis omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore </p>
					</div>
					
				</div>
  
                <div class="col-lg-6 col-md-12 about_img space-60">
                    <div class="about_img-inner">
                        <img src="https://placeimg.com/1200/800/nature" class="img-fluid" alt="img">
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
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <img src="https://placeimg.com/1200/800/nature" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                           <h3>Why do we use it?</h3>
                           <div class="price">
                              <p>Prices: <span>$159</span></p>
                           </div>
                           <p class="font-italic">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                           <ul>
                              <li><i class="fas fa-arrow-right"></i> The standard Lorem Ipsum passage, used since the 1500s</li>
                              <li><i class="fas fa-arrow-right"></i> 1914 translation by H. Rackham</li>
                              <li><i class="fas fa-arrow-right"></i> Section 1.10.33 of "de Finibus Bonorum et Malorum"</li>
                           </ul>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <img src="images/image-two.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                           <h3>What is Lorem Ipsum?</h3>
                           <div class="price">
                              <p>Prices: <span>$169</span></p>
                           </div>
                           <p class="font-italic">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                           <ul>
                              <li><i class="fas fa-arrow-right"></i> The standard Lorem Ipsum passage, used since the 1500s</li>
                              <li><i class="fas fa-arrow-right"></i> 1914 translation by H. Rackham</li>
                              <li><i class="fas fa-arrow-right"></i> Section 1.10.33 of "de Finibus Bonorum et Malorum"</li>
                           </ul>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <img src="images/image-three.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                           <h3>Where can I get some?</h3>
                           <div class="price">
                              <p>Prices: <span>$179</span></p>
                           </div>
                           <p class="font-italic">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                           <ul>
                              <li><i class="fas fa-arrow-right"></i> The standard Lorem Ipsum passage, used since the 1500s</li>
                              <li><i class="fas fa-arrow-right"></i> 1914 translation by H. Rackham</li>
                              <li><i class="fas fa-arrow-right"></i> Section 1.10.33 of "de Finibus Bonorum et Malorum"</li>
                           </ul>
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

<style>
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
    color: #6b55d2;
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
       
        /******************* Timeline Demo - 10 *****************/
.main-timeline10:after,.main-timeline10:before{content:"";display:block;width:100%;clear:both}
.main-timeline10 .timeline{padding:0;display:-webkit-inline-box}
.main-timeline10 .col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:24%}
.main-timeline10 .timeline-inner{text-align:center;margin:20px 20px 35px 35px;position:relative}
.main-timeline10 .timeline-inner:after{content:"";width:120%;height:3px;background:#555;position:absolute;bottom:0;left:10%}
.main-timeline10 .timeline:last-child .timeline-inner:after{width:0}
.main-timeline10 .year{background:#58b25e;padding:5px 0;border-radius:30px 0;font-size:26px;font-weight:700;color:#fff;z-index:1;position:relative}
.main-timeline10 .year:after,.main-timeline10 .year:before{position:absolute;top:-19px;content:""}
.main-timeline10 .year:before{right:0;border:10px solid transparent;border-bottom:10px solid #58b25e;border-right:10px solid #58b25e}
.main-timeline10 .year:after{width:25px;height:19px;border-radius:0 0 20px;background:#fff;right:1px}
.main-timeline10 .timeline-content{padding:10px 10px 30px;border-left:3px solid #58b25e;position:relative}
.main-timeline10 .timeline-content:before{content:"";position:absolute;top:0;left:-1px;border:10px solid transparent;border-top:10px solid #58b25e;border-left:10px solid #58b25e}
.main-timeline10 .timeline-content:after{content:"";width:25px;height:19px;border-radius:20px 0 0;background:#fff;position:absolute;top:0;left:0}
.main-timeline10 .post{font-size:26px;color:#333}
.main-timeline10 .description{font-size:14px;color:#333}
.main-timeline10 .timeline-icon{width:70px;height:70px;line-height:65px;border-radius:50%;border:5px solid #58b25e;background:#fff;font-size:30px;color:#555;z-index:1;position:absolute;bottom:-35px;left:-35px}
.main-timeline10 .timeline:nth-child(2n) .year{background:#9f84c4}
.main-timeline10 .timeline:nth-child(2n) .year:before{border-bottom-color:#9f84c4;border-right-color:#9f84c4}
.main-timeline10 .timeline:nth-child(2n) .timeline-content{border-left-color:#9f84c4}
.main-timeline10 .timeline:nth-child(2n) .timeline-content:before{border-top-color:#9f84c4;border-left-color:#9f84c4}
.main-timeline10 .timeline:nth-child(2n) .timeline-icon{border-color:#9f84c4}
.main-timeline10 .timeline:nth-child(3n) .year{background:#f35958}
.main-timeline10 .timeline:nth-child(3n) .year:before{border-bottom-color:#f35958;border-right-color:#f35958}
.main-timeline10 .timeline:nth-child(3n) .timeline-content{border-left-color:#f35958}
.main-timeline10 .timeline:nth-child(3n) .timeline-content:before{border-top-color:#f35958;border-left-color:#f35958}
.main-timeline10 .timeline:nth-child(3n) .timeline-icon{border-color:#f35958}
.main-timeline10 .timeline:nth-child(4n) .year{background:#e67e49}
.main-timeline10 .timeline:nth-child(4n) .year:before{border-bottom-color:#e67e49;border-right-color:#e67e49}
.main-timeline10 .timeline:nth-child(4n) .timeline-content{border-left-color:#e67e49}
.main-timeline10 .timeline:nth-child(4n) .timeline-content:before{border-top-color:#e67e49;border-left-color:#e67e49}
.main-timeline10 .timeline:nth-child(4n) .timeline-icon{border-color:#e67e49}
@media only screen and (max-width:990px){.main-timeline10 .timeline-inner:after{width:110%}
.main-timeline10 .timeline:nth-child(2n) .timeline-inner:after{width:0}
}
@media only screen and (max-width:767px){.main-timeline10 .timeline{margin-bottom:50px}
.main-timeline10 .timeline-inner:after,.main-timeline10 .timeline:nth-child(2n) .timeline-inner:after{width:100%;height:3px;left:0}
}
@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800);
    .post-slider {
	padding: 80px 0px 100px;
	background-color: #673AB7;
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