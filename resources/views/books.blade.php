@extends('layout')


@section('content')

<!-- Page Content -->
<section class="mt-5 container">

<h4 class=" mb-4">
  Libros<br> 
  </h4>
  <div class="flex flex-wrap">
  @foreach($categories as $category)
       <a href="{{route('category.books', $category->slug)}}" class="btn btn-outline-secondary  btn-sm mr-2 mb-2">{{$category->name}}</a>
  @endforeach
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
				<a href="{{route('book.details', $book->slug)}}" class="btn btn-primary btn-sm float-right"> Ver Libro </a>
				<div class="price-wrap h5">
					<span class="price-new"><i class="fa fa-eye"> </i> {{$book->view_count}}</span>
				</div> <!-- price-wrap.// -->

			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
@endforeach
</div>

</div> <!-- row.// -->

</div> 

<!--container end-->
@endsection
