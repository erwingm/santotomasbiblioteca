@extends('layout')
@section('content')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<div class="blog-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-9 blog-left">
					<ul class="bolg-post-list">
					@foreach($activities as $activity)
						<li>
							<article class="blog-post">
								<div class="featured-post">
									<a href="#">
									@if ($activity->photos->count() === 1)
									<img src="{{$activity->photos->first()->url }}" width="70" height="250" alt="">
									@endif
									</a>
								</div>
								<div class="divider25"></div>
								<div class="content">
									<h3 class="title">
										<a href="#">{{$activity->title}}</a>
									</h3>
									<ul class="meta-post">
										<li class="comment">
											<a href="#">
												2 Comments
											</a>
										</li>
										<li class="date">
											<a href="#">
												{{$activity->published_at->format('M d')}}
											</a>
										</li>
									</ul>
									<div class="entry-post">
										<p>{{$activity->description}}</p>
										<ul class="meta-post">
											<li class="comment">
											@foreach($activity->tags as $tag)
												<a href="" class=""># {{$tag->name}}</a>
											@endforeach
											</li>
										</ul>
										<div class="more-link">
											<a href="#" class="read-more-btn">Read More</a>
											<a href="#" class="read-more-btn">Read More</a>
										</div>
									</div>
								</div>
							</article>
						</li>
					@endforeach
					</ul>
					<div class="blog-pagination">
						<ul class="">
							<li class="prev">
								<a href="#">
									<i class="fas fa-chevron-left"></i>
								</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">01</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">02</a>
							</li>
							<li class="active">
								<a href="#" class="waves-effect waves-teal">03</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">04</a>
							</li>
							<li class="next">
								<a href="#">
									<i class="fas fa-chevron-right"></i>
								</a>
							</li>
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