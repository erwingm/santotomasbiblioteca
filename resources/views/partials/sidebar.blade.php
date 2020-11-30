<div class="col-md-3 sidebar">
				<div class="widget widget-categories">
						<div class="widget-title">
							<h3 class="card-subtitle mb-2 text-muted"><strong>Material de Libros</strong></h3>
						</div>
						<br>
						<ul class="cat-list">
						@foreach($materials as $material)
							<li>
							<a href="{{route('fisico.books',$material->slug)}}" class="waves-effect waves-teal "> <strong>{{$material->name}}</strong><span class="badge badge-success logo">{{$material->books->count()}}</span></a>
							</li>
						@endforeach
						</ul>
					</div>
					<div class="widget widget-categories">
						<div class="widget-title">
							<h3 class="card-subtitle mb-2 text-muted"><strong>Categorías</strong></h3>
						</div>
						<ul class="cat-list">
						@foreach($categories as $category)
							<li>
								<a href="{{route('category.books',$category->slug)}}" class="waves-effect waves-teal"><strong>{{$category->name}}</strong><span class="badge badge-success logo"> {{ $category->books->count() }}</span> </a>
							</li>
						@endforeach
						</ul>
					</div>
					<div class="widget widget-tags">
						<div class="widget-title">
							<h3  class="card-subtitle mb-2 text-muted"><strong>Etiquetas</strong></h3>
						</div>
						<ul class="tag-list">
						@foreach($tags as $tag)
							<li>
								<a href="{{route('tag.books',$tag->slug)}}" class="waves-effect waves-teal">{{$tag->name}}</a>
							</li>
						@endforeach
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<style>
.logo {
	float:right;
	padding: 8px;
	}
</style>