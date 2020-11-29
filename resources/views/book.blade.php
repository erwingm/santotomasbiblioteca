@extends('layout2')
@section('title')
{{$book->title}}
@endsection
@section('content')
<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Page Heading
    <small>Secondary Text</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="{{ Storage::disk('public')->url('book/'.$book->image) }}" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">{{$book->description}}</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3">Project Details</h3>
      <ul>
        <li>{{$book->category->name}}}</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Related Projects</h3>

  <div class="row">
    @foreach($randombooks as $randombook)
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
          {{$randombook->title}}
    </div>
    @endforeach


 


  </div>
  <!-- /.row -->

</div>
{{$books->links}}
<!-- /.container -->
@endsection