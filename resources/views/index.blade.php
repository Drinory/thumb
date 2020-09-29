@extends('layouts.app')
@section('content')
<div id="main">
	<div class="section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 p-0 " >
				<!-- Favorites Section -->
					<div class="blog-slick-slider" data-items="3" >
					@foreach($favorites as $favorite)
						<div class="blog-item" >
							<div class="blog-inner">
								<a href="{{ route('post.show', $favorite->id) }}">
									<img src="images/{{$favorite->image}}"  alt="" />
								</a>
								<div class="info">
									<div class="tags">
										<a href="{{ url('') }}/{{$favorite->originalCategory}}">{{$favorite->category}}</a>
									</div>
									<div class="title">
										<a href="{{ route('post.show', $favorite->id) }}">{{$favorite->title}}</a>
									</div>
									<div class="meta">
										<span class="date">{{\Carbon\Carbon::parse($favorite->created_at)->format('d/m/Y')}}</span>
										<a class="readmore" href="{{ route('post.show', $favorite->id) }}">Lexo me shume →</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					</div>
				<!-- End of Favorites Section -->
				</div>
			</div>
		</div>
	</div>
	<div class="section mt-7">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="blog-list style-2 " id="userTable" >
					
						@foreach($posts as $post)
						<div class="blog-item mb-6 postDiv">
								<div class="blog-inner">
									<a href="{{ route('post.show', $post->id) }}">
										<div class="overlay"><i class="mdi-link-variant"></i></div>
										<img src="{{ asset('images/blog/blog_24.jpg') }}" alt="" />
									</a>
									<div class="info" >
										<div class="tags" >
											<a href="{{ url('') }}/{{ $post->originalCategory }}">{{$post->category}}</a>
										</div>
										<div class="title">
											<a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a>
										</div>
										<div class="meta" >
											<span class="date">{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</span>
											<div class="divider">-</div>
											<span class="author">Postuar nga <a href="team.index">Blerim Iseni</a></span>
										</div>
										<div class="text" >
											<p style="height: 80px; overflow:hidden;">{{ $post->text }}</p>
											<a href="{{ route('post.show', $post->id) }}" class="button small">Lexo me shume</a>
										</div>
									</div>
									<div class="info-bottom">
										<div class="date">{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</div>
										<div class="comment">
											<a href="{{ url('') }}/{{ $post->originalCategory }}">Kategoria: {{$post->category}}</a>
										</div>
									</div>
								</div>
							
						</div>
						@endforeach

					</div>
					<!-- <input type="button" value="Load More Posts" class="btn btn-primary" id="but_fetchall"> -->
					<div class="load-more-wrapper">
						<div class="load-more">
							<a id="but_fetchall">ME SHUME POSTE</a>
							<i class="fa fa-chevron-down"></i>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget">
						<div class="widget-title-wrapper">
							<div class="widget-title">
								KUSH JAM UNE
								<div class="simple-line"></div>
							</div>
							<div class="simple-line"></div>
						</div>
						<div class="vcard text-center">
							<img src="{{ asset('images/brooke.jpg') }}" alt="" />
							<div class="mb-1"></div>
							<p>Blerim Iseni <br>Punetor Administrativ, Social, Rinor<br>Nje Jete Kushtuar "DITURISE"</p>
						</div>
					</div>
					<div class="widget">
						<div class="widget-title-wrapper">
							<div class="widget-title">
								NA NDJEKNI
								<div class="simple-line"></div>
							</div>
							<div class="simple-line"></div>
						</div>
						<div class="widget-social text-center">
							<a href="https://www.instagram.com/blerimiseni/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.facebook.com/blerimisenii"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
					<div class="widget mt-1">
						<div class="widget-title-wrapper">
							<div class="widget-title">
								POSTIMET E FUNDIT
								<div class="simple-line"></div>
							</div>
							<div class="simple-line"></div>
						</div>
						<div class="widget-recent-post">
							<ul>
							@foreach($recents as $recent)
								<li>
									<div class="featured">
										<a href="{{ route('post.show', $recent->id) }}">
											<img src="images/{{$recent->image}}" alt="" />
										</a>
									</div>
									<div class="content">
										<h6 class="title">
											<a href="blog-detail.html">{{$recent->title}}</a>
										</h6>
										<div class="info">
											<div class="date">{{\Carbon\Carbon::parse($recent->created_at)->format('d/m/Y')}}</div>
											<div class="excerpt">{{\Illuminate\Support\Str::words($recent->text, 10)}}</div>
										</div>
									</div>
								</li>
							@endforeach
							</ul>
						</div>
					</div>
					<div class="widget">
						<div class="widget-title-wrapper">
							<div class="widget-title">
								REKLAME
								<div class="simple-line"></div>
							</div>
							<div class="simple-line"></div>
						</div>
						<div class="widget-ads text-center">
							<a href="#"><img src="{{ asset('images/advertise-black.png') }}" alt="" /></a>
						</div>
					</div>
					<div class="widget">
						<div class="widget-title-wrapper">
							<div class="widget-title">
								EKIPI
								<div class="simple-line"></div>
							</div>
							<div class="simple-line"></div>
						</div>
						<div class="widget-gallery">
							<a href="{{ asset('images/gallery/gallery_1.jpg') }}" class="mfp-image gallery-item">
								<img src="{{ asset('images/gallery/thumb/gallery_1.jpg') }}" alt="" />
							</a>
							<a href="{{ asset('images/gallery/gallery_2.jpg')}}" class="mfp-image gallery-item">
								<img src="{{ asset('images/gallery/thumb/gallery_2.jpg') }}" alt="" />
							</a>
							<a href="{{ asset('images/gallery/gallery_3.jpg') }}" class="mfp-image gallery-item">
								<img src="../../images/gallery/thumb/gallery_3.jpg') }}" alt="" />
							</a>
							<a href="{{ asset('images/gallery/gallery_4.jpg') }}" class="mfp-image gallery-item">
								<img src="{{ asset('images/gallery/thumb/gallery_4.jpg') }}" alt="" />
							</a>
							
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="section mt-7 mb-9">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner">
						<a href="{{ route('team.index') }}" class="link">
							<img src="{{ asset('images/banner/banner_4.jpg')}}" alt="" />
						</a>
						<div class="caption">
							<span>KUSH JEMI NE</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner">
						<a href="{{ route('contact') }}" class="link">
							<img src="{{ asset('images/banner/banner_5.jpg') }}" alt="" />
						</a>
						<div class="caption">
							<span>RAPORTO</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner">
						<a href="#" class="link">
							<img src="{{ asset('images/banner/banner_6.jpg') }}" alt="" />
						</a>
						<div class="caption">
							<span>PUNET TONA</span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</div>
@endsection

@section('scripts')

<script src="{{ asset('js/modifications.js') }}"></script>
		
    
@endsection

