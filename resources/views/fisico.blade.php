@extends('layout')
@section('content')

<!-- Page Content -->
<section class="mt-5 container">

<h4 class=" mb-4">
  Listado de Libros Mas Vistos Fisicos<br> 
  <small class="subtitle-section"></small>
  </h4>
  <div class="flex flex-wrap">
  <li>
  <a href="#" class="btn btn-outline-secondary btn-rounded btn-sm mr-2 mb-2"></a>
  </li>
   
  </div>

    <br>

</div>

</section>

<div class="container">
{{$material->name}}
<div class="row">
@if($material->books->count() > 0)
@foreach($material->books as $book)
    <div class="col-md-3">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <img src="{{ Storage::disk('public')->url('book/'.$book->image) }}">
            </div>
            <figcaption class="info-wrap">
                <h6 class="title text-dots"><a href="#">{{$book->title}}</a></h6>
                <div class="action-wrap">
                    <a href="" class="btn btn-primary btn-sm float-right"> Ver Libro </a>
                    <div class="price-wrap h5">
                        <span class="price-new"><i class="fa fa-eye"> </i> 0</span>
                    </div> <!-- price-wrap.// -->

                </div> <!-- action-wrap -->
            </figcaption>
        </figure> <!-- card // -->
    </div> <!-- col // -->
@endforeach
 
@else
<strong>No hay books</strong>

</div> <!-- row.// -->
@endif


</div>
</div>
<!--container end-->
@endsection


