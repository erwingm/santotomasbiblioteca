
@extends('layout2')
@section('content')
<div class="blog-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-9 blog-left">
					<ul class="bolg-post-list">
            <div class="container">
              <div class="row ">
                @foreach($investigations as $investigation)
                <div class="col-md-6">
                  <div class="card shadow" style="width: 20rem;">
                      <div class="inner">
                      <img style="width:320px;height:300px;" class="img-responsive thumbnail" src="{{ Storage::disk('public')->url('investigation/'.$investigation->image) }}" alt="">
                      </div>
                      <div class="card-body text-center">
                        <p class="card-text">
                            {{$investigation->description}}
                        </p>
                      </div>
                      <div class="card-footer">
                        <a href="{{$investigation->name}}" target="_blank" class="btn btn-success">Visitar</a>
                      </div>
                  </div>
                  <br>
                </div>

                @endforeach

                </div>

            </div>

          </ul>
</div>

	
@include('partials.sidebar')

	
@stop
