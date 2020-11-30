@extends('layout2')
@section('title')
{{$book->title}}
@endsection
@section('content')
<!-- Page Content -->

<div class="container">
<br>
  <!-- Portfolio Item Heading -->
  <div class="row">
    <div class="col-md-12">
    <h1 class="my-4">
    <div class="card" style="text-align:center;">
      <div class="card-header">
         <h2 class="card-subtitle mb-2 text-muted" style="text-align:center;"><strong>{{$book->title}}</strong></h2> <small></small>
      </div>
    </div>
  </h1>
    </div>
  </div>

<br>
  <!-- Portfolio Item Row -->
  <div class="row">

  <div class="col-md-8">
    <a class="book-container" href="#" rel="noreferrer noopener">
      <div class="book">
        <img src="{{ Storage::disk('public')->url('book/'.$book->image) }}" alt="tab1" class="img img-responsive"/>
      </div>
    </a>
      <br>
    </div>
    
    <div class="col-md-4">
    <div class="card">
            <div class="card-body">
              <h5 class="card-title"><strong>DESCRIPCIÓN DEL LIBRO</strong></h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$book->category->name}}</h6>
              <p class="card-text">{!! $book->description !!}</p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title"><strong>DETALLE DEL LIBRO</strong></h5>
              <ul class="timeline">
                <li><h6 class="card-subtitle mb-2 text-muted">Categoria :  {{$book->category->name}}</h6></li>
                <li><h6 class="card-subtitle mb-2 text-muted">Paginas del Libro:  {{$book->page}}</h6></li>
                <li><h6 class="card-subtitle mb-2 text-muted">Disponibilidad: @if($book->status == true)<span class="badge badge-success">Disponible</span>@else<span class="badge badge-danger">No Disponible</span>@endif
                </li>
                <li><h6 class="card-subtitle mb-2 text-muted">Unidades En biblioteca : {{$book->quantity}}</h6></li>
                <li><h6 class="card-subtitle mb-2 text-muted">Editorial : {{$book->editorial->name}}</h6></li>
                <li>
                <div class="form-group">
                    <div class="input-group">
                    <h6 class="card-subtitle mb-2 text-muted"> Autores :  </h6>
                        @foreach($book->authors as $author)
                         <h6 class="card-subtitle mb-2 text-muted"> {{ $author->name }}  </h6>
                        @endforeach
                    </div> 
                  </div>
                </li>
                <li>
                <div class="form-group">
                    <div class="input-group">
                    <h6 class="card-subtitle mb-2 text-muted"> Material Disponible :  </h6>
                        @foreach($book->materials as $material)
                         <h6 class="card-subtitle mb-2 text-muted"> - {{ $material->name }}  </h6>
                        @endforeach
                    </div> 
                  </div>
                </li>
                <li><h6 class="card-subtitle mb-2 text-muted">Vistas: {{$book->view_count}}</h6></li>
              </ul>
            </div>
            <div class="card-footer">
                @if($book->donwload == "Descargar")
                <a href="{{ asset('pdfs/'.$book->document) }}" download class="btn btn-success">Descargar</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">lEER PDF</button>
                @else
                <span>No Disponible para Descarga</span>
                @endif
            </div>
            
        </div>
        
        <a href="{{asset('pdfs/'.$book->document)}}" target="_blank">asdasdasdsadasdasdsadasdas</a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
          
    </div>


  </div>
  <iframe style="width:0; height:0; border:0; border:none" height="600" width="700" src="{{asset('pdfs/'.$book->document)}}"></iframe>
  <!-- /.row -->
  <br>
    <hr>
  <!-- Related Projects Row -->
  <h3 class="my-4">Libros Recomendados</h3>
  <br>
  <div class="row">
    @foreach($randombooks as $randombook)
    <div class="col-md-3 col-sm-6 mb-4">
    <a class="book-container" href="{{route('book.details', $randombook->slug)}}" rel="noreferrer noopener">
      <div class="book" >
        <img src="{{ Storage::disk('public')->url('book/'.$randombook->image) }}" alt="tab1" class="img img-responsive"/>
      </div>
    </a>
      <br>
         <span><i class="fa fa-eye"></i></span> {{$randombook->view_count}}
    </div>
    @endforeach

  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@endsection

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <iframe style="border:1px solid #666CCC" height="700" width="800" src="{{asset('pdfs/'.$book->document)}}"></iframe>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lectura del Libro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe style="border:1px solid #666CCC" height="600" width="450" src="{{asset('pdfs/'.$book->document)}}" allowfullscreen></iframe>
      
      </div>
    </div>
  </div>
</div>

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
ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #009688;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: #009688;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #fafafa;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
</style>