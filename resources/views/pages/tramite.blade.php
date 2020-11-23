
@extends('layout2')
@section('content')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<div class="blog-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-9 blog-left">
					<ul class="bolg-post-list">
          <br>
<div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.

</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose ...</option>
                                    <option> New Buyer</option>
                                    <option> Auction</option>
                                    <option> Complaint</option>
                                    <option> Feedback</option>
                                  </select>
                        </div>
                        <div class="form-group col-md-12">
                                  <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <button type="button" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<br>
					</ul>
					<div class="blog-pagination">
						<ul class="">
						

						</ul>
					</div>
				</div>
				<div class="col-md-3 sidebar">
					<div class="widget widget-search">
						<form action="#" method="get" accept-charset="utf-8">
							<input type="text" name="widget-search" placeholder="Search">
						</form>
					</div>
					<div class="widget widget-categories">
						<div class="widget-title">
							<h3>Categories</h3>
						</div>
						<ul class="cat-list">
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i> Accessories<span>(03)</span></a>
							</li>
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i> Cameras<span>(19)</span></a>
							</li>
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i> Computers<span>(56)</span></a>
							</li>
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i> Laptops<span>(03)</span></a>
							</li>
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i> Networking<span>(03)</span></a>
							</li>
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i> Old Products<span>(89)</span></a>
							</li>
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i> Smartphones<span>(90)</span></a>
							</li>
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i> Software<span>(23)</span></a>
							</li>
						</ul>
					</div>
					<div class="widget widget-tags">
						<div class="widget-title">
							<h3>Popular Tags</h3>
						</div>
						<ul class="tag-list">
							<li>
								<a href="#" class="waves-effect waves-teal">Phone</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">Cameras</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">Computers</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">Laptops</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">Headphones</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
