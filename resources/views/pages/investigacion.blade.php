
@extends('layout2')
@section('content')
<div class="blog-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-9 blog-left">
					<ul class="bolg-post-list">
					@foreach($investigations as $investigation)
						<li>
							<article class="blog-post">
								<div class="featured-post">
									<a href="#">
									<img src="{{ Storage::disk('public')->url('investigation/'.$investigation->image) }}" width="70" height="250" alt="">
							
									</a>
								</div>
								<div class="divider25"></div>
								<div class="content">
									<div class="entry-post">
										<p>{{$investigation->description}}</p>
										<div class="more-link">
											<a href="{{$investigation->name}}" target="_blank" class="btn btn-primary">Visitar Página</a>
										</div>
									</div>
								</div>
							</article>
						</li>
					@endforeach
					</ul>

				</div>
	
@include('partials.sidebar')

	
@stop
