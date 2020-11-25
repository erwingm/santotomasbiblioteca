@extends('layout2')
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
											@foreach($activity->tags as $tag)
												<a href="" class=""># {{$tag->name}}</a>
											@endforeach
											</a>
										</li>
										<li class="date">
											<a href="#">
												
												{{ Carbon\Carbon::parse($activity->published_at)->format('M d') }}
											</a>
										</li>
									</ul>
									<div class="entry-post">
										<p>{{$activity->description}}</p>
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
				@include('partials.sidebar')
@stop
