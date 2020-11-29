<div class="col-md-3 sidebar">
				<div class="widget widget-categories">
						<div class="widget-title">
							<h3>Material de Libros</h3>
						</div>
						<ul class="cat-list">
						@foreach($materials as $material)
							<li>
								<a href="{{route('fisico.books',$material->slug)}}" class="waves-effect waves-teal">{{$material->name}} </a>
							</li>
						@endforeach

						
						</ul>
					</div>
					<div class="widget widget-categories">
						<div class="widget-title">
							<h3>Categories</h3>
						</div>
						<ul class="cat-list">
						@foreach($categories as $category)
							<li>
								<a href="{{route('category.books',$category->slug)}}" class="waves-effect waves-teal">{{$category->name}} {{ $category->books->count() }} </a>
							</li>
						@endforeach

						
						</ul>
					</div>
					<div class="widget widget-tags">
						<div class="widget-title">
							<h3>Etiquetas</h3>
						</div>
						<ul class="tag-list">
						@foreach($tags as $tag)
							<li>
								<a href="{{route('tag.books',$tag->slug)}}" class="waves-effect waves-teal">{{$tag->name}}}</a>
							</li>
						@endforeach
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>