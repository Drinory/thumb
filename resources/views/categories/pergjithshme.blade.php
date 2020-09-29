@extends('layouts.app')
@section('content')


<div id="main">
	<div class="section mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 class="mb-1">Thumbimet e Pergjithshme</h2>
						<p>Te rradhitura sipas dates.</p>
						<div class="simple-line"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section blog-list mb-10">
		<div class="container">
			<div class="row" id="userTables">
			@foreach($posts as $post)
				<div class="col-md-4">
					<div class="blog-item text-center mb-6">
						<div class="blog-inner">
							<a href="{{route('post.show', $post->id)}}">
								<div class="overlay"><i class="mdi-link-variant"></i></div>
								<img src="{{url('')}}/images/{{$post->image}}" alt="" />
							</a>
							<div class="info" style="height:300px;">
								<div class="tags" style="height:30px;">
									<a href="{{url('')}}/{{$post->originalCategory}}">{{$post->category}}</a>
								</div>
								<div class="title" style="height:70px;">
									<a href="{{route('post.show', $post->id)}}">{{ \Illuminate\Support\Str::limit($post->title, 40, $end='...') }}</a>
								</div>
								<div class="text" >
									<p style="height:155px; overflow:hidden;">{{$post->text}}</p>
									<a href="{{route('post.show', $post->id)}}" class="button small">Lexo Me Shume</a>
								</div>
							</div>
							<div class="meta">
								<span class="date">{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</span>
								<span class="author">Postuar nga: <a href="{{route('team.index')}}">Blerim Iseni</a></span>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>
<div class="load-more-wrapper">
	<div class="load-more">
		<a id="button_fetchall">ME SHUME POSTE</a>
		<i class="fa fa-chevron-down"></i>
	</div>
</div>
@endsection
@section('scripts')

<script src="{{ asset('js/categoriesLoad.js') }}"></script>

@endsection
