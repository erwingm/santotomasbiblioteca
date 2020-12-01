
<header>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @forelse($sliders as $slider)
    <div  class="carousel-item @if($loop->index==1) active @endif">
      <img class="d-block w-100 " src="{{ Storage::disk('public')->url('slider/'.$slider->image) }}" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$slider->name}}</h5>
        <p>{{$slider->description}}</p>
      </div>
    </div>
    @empty
    @endforelse
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     </header>

</section>
  <section class="py-5">
    <div class="container" >
      <div class="row justify-content-center" >
        <div class="col-12 col-md-10 col-lg-8" >
            <form method="GET" action="{{route('search')}}" class="card card-sm" style="position: inherit;
            top: -75px; line-height: 1.15;" >
                <div class="card-body row no-gutters align-items-center">
                    <!--end of col-->
                    <div class="col search">
                        <input value="{{isset($query) ? $query : '' }}" class="form-control form-control-lg form-control-borderless" name="query" type="search" placeholder="Buscar libros">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Buscar</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
    </div>
    </div>
  </section>

<style>
.carousel-inner img {
    width: 50%;
    max-height: 500px;
}

.carousel-inner{
 height: 470px;
}

</style>