@extends('layout')
@section('content')

<!-- Page Content -->
<section class="mt-5 container">

<h4 class=" mb-4">
  <h2 class="card-subtitle mb-2 text-muted" style="text-align:center">Categorías</h2><br> 
  </h4>
  <div class="flex flex-wrap">
  @foreach($categories as $category)
       <a href="{{route('category.books', $category->slug)}}" class="btn btn-outline-secondary  btn-sm mr-2 mb-2">{{$category->name}}</a>
  @endforeach
  </div>
    <br>
</div>
<hr>
</section>
<br>

<div class="container">

	<div class="row">
	
	@foreach($books as $book)
	<div class="col-md-3 col-sm-6 mb-4">
	<hr>
	<br>
	<a class="book-container" href="{{route('book.details', $book->slug)}}" >
		<div class="book">
		<img src="{{ Storage::disk('public')->url('book/'.$book->image) }}" alt="tab1" class="img img-responsive"/>
		</div>
	</a>
		<br>
	</div>
	@endforeach
	</div>
</div> <!-- row.// -->

</div>
<section class="mt-5 container">

<h4 class=" mb-4">
    <h2 class="card-subtitle mb-2 text-muted" style="text-align:center" > Los Libros más Vistos</h2><br> 
  </h4>
</div>
</section>
<br>
<div class="container">

	<div class="row">
	@foreach($popular_books as $popular_book)
	<div class="col-md-3 col-sm-6 mb-4">
	<hr>
	<br>
	<a class="book-container" href="{{route('book.details', $popular_book->slug)}}" rel="noreferrer noopener">
		<div class="book">
		<img src="{{ Storage::disk('public')->url('book/'.$popular_book->image) }}" alt="tab1" class="img img-responsive"/>
		</div>
	</a>
		<br>
		<span><i class="fa fa-eye"></i></span> {{$popular_book->view_count}}
	</div>
	@endforeach

	</div>

</div> <!-- row.// -->

</div> 

<!--container end-->
@endsection



<style>

.book-container {
  display: flex;
  align-items: center;
  justify-content: center;
  perspective: 600px;
}

@keyframes initAnimation {
  0% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(-30deg);
  }
}

.book {
  width: 200px;
  height: 300px;
  position: relative;
  transform-style: preserve-3d;
  transform: rotateY(-30deg);
  transition: 1s ease;
  animation: 1s ease 0s 1 initAnimation;
}

.book-container:hover .book, 
.book-container:focus .book {
  transform: rotateY(0deg);
}

.book > :first-child {
  position: absolute;
  top: 0;
  left: 0;
  background-color: red;
  width: 200px;
  height: 300px;
  transform: translateZ(25px);
  background-color: #01060f;
  border-radius: 0 2px 2px 0;
  box-shadow: 5px 5px 20px #666;
}

.book::before {
  position: absolute;
  content: ' ';
  background-color: blue;
  left: 0;
  top: 3px;
  width: 48px;
  height: 294px;
  transform: translateX(172px) rotateY(90deg);
  background: linear-gradient(90deg, 
    #fff 0%,
    #f9f9f9 5%,
    #fff 10%,
    #f9f9f9 15%,
    #fff 20%,
    #f9f9f9 25%,
    #fff 30%,
    #f9f9f9 35%,
    #fff 40%,
    #f9f9f9 45%,
    #fff 50%,
    #f9f9f9 55%,
    #fff 60%,
    #f9f9f9 65%,
    #fff 70%,
    #f9f9f9 75%,
    #fff 80%,
    #f9f9f9 85%,
    #fff 90%,
    #f9f9f9 95%,
    #fff 100%
    );
}

.book::after {
  position: absolute;
  top: 0;
  left: 0;
  content: ' ';
  width: 200px;
  height: 300px;
  transform: translateZ(-25px);
  background-color: #01060f;
  border-radius: 0 2px 2px 0;
  box-shadow: -10px 0 50px 10px #666;
}


</style>