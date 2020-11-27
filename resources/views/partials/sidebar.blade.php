<div class="col-md-3 sidebar">
					<div class="widget widget-categories">
						<div class="widget-title">
							<h3>Categories</h3>
						</div>
						<ul class="cat-list">
						@foreach($categories as $category)
							<li>
								<a href="#"><i class="fas fa-chevron-right"></i>{{$category->name}}<span> ({{$category->books->count()}})</span></a>
							</li>
						@endforeach
						</ul>
					</div>
					<div class="widget widget-tags">
						<div class="widget-title">
							<h3>Etiquetas</h3>
						</div>
						<ul class="tag-list">
							<li>
								<a href="#" class="waves-effect waves-teal">Phone</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">Cameras</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">Computers</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">Laptops</a>
							</li>
							<li>
								<a href="#" class="waves-effect waves-teal">Headphones</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>