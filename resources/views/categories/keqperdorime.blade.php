@extends('layouts.app')
@section('content')


<div id="main">
	<div class="section mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 class="mb-1">Thumbimet Ndaj Keqperdorimeve</h2>
						<p>Te rradhitura sipas dates.</p>
						<div class="simple-line"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section blog-list mb-10">
		<div class="container">
			<div class="row">
			@foreach($posts as $post)
				<div class="col-md-4">
					<div class="blog-item text-center mb-6">
						<div class="blog-inner">
							<a href="blog-detail.html">
								<div class="overlay"><i class="mdi-link-variant"></i></div>
								<img src="{{url('')}}/image/{{$post->image}}" alt="" />
							</a>
							<div class="info" style="height:350px;">
								<div class="tags" style="height:50px;">
									<a href="#">{{$post->category}}</a>
								</div>
								<div class="title" style="height:100px;">
									<a href="blog-detail.html">{{$post->title}}</a>
								</div>
								<div class="text" >
									<p style="height:165px; overflow:hidden;">{{$post->text}}</p>
									<a href="#" class="button small">Lexo Me Shume</a>
								</div>
							</div>
							<div class="meta">
								<span class="date">{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</span>
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

@endsection

