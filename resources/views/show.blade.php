@extends('layouts.app')
@section('content')



<div id="main">
	<div class="section mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 class="mb-1">{{$posts->title}}</h2>
						<div class="simple-line"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section mt-4">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-sm-offset-2">
					<img src="/images/{{$posts->image}}" alt="" />
					<div class="mb-5"></div>
				</div>
				<div class="col-sm-12">
					<div class="single-content">
						<p>{{$posts->text}}</p>
						<div class="text-center mb-2">
							<img width="480" src="../../images/blog_detail_1.jpg" alt="" />
						</div>
					</div>
					<div class="blog-detail info-bottom">
						<div class="date">{{\Carbon\Carbon::parse($posts->created_at)->format('d/m/Y')}}</div>
						
						<div class="comment">
							<a href="#">Kategoria: {{$posts->category}} </a>
						</div>
					</div>
					<div class="blog-detail related-post">
						<h4 class="title">Lajme Te Ngjashme</h4>
						<p class="sub-title">Postime qe nuk duhet ti humbesh.</p>
						<div class="mb-3"></div>
						<div class="blog-list">
							<div class="row">
							@foreach($recents as $recent)
								<div class="col-md-4">
									<div class="blog-item text-center mb-6">
										<div class="blog-inner">
											<a href="blog-detail.html">
												<div class="overlay"><i class="mdi-link-variant"></i></div>
												<img src="{{url('')}}/images/{{$recent->image}}" class=""   alt="" />
											</a>
											<div class="info">
												<div class="tags">
													<a href="#">{{$recent->category}}</a>
												</div>
												<div class="title">
													<a href="blog-detail.html">{{$recent->title}}</a>
												</div>
												<div class="text">
													<p>{{\Illuminate\Support\Str::words($recent->text, 20)}}</p>
													<a href="#" class="button small">Lexo Me Shume</a>
												</div>
											</div>
											<div class="meta">
												<span class="date">{{\Carbon\Carbon::parse($recent->created_at)->format('d/m/Y')}}</span>
												<span class="author">Postuar nga: <a href="#">Blerim Iseni</a></span>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>



@endsection