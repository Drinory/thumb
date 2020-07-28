@extends('layouts.app')

@section('content')

<div id="main">
	<div class="section mt-5 mb-10">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 class="fz-44">EKIPI JONE</h2>
						<h5>
							Kush jane fytyrat prapa projektit tone.<br>
							Kontakto per me shume info.
						</h5>
					</div>
				</div>
			</div>
			<div class="row col-md-offset-1 pl-4">
			@foreach($members as $member)
				<div class="col-md-5 p-2 ">
					<div class="team-member text-center ">
						<div class="member-info">
							<div class="member-desc">
								<h3>{{$member->name}}</h3>
								<p>{{$member->description}}</p>
							</div>
							<div class="member-overlay"></div>
							<img src="images/<?php echo $member->image ?>" alt="Fotografia e {{$member->name}}">
							<div class="member-links">
								<div class="member-links-inner">
									<div class="link">
										<a href="//{{$member->facebook}}"><i class="socialink fa fa-facebook"></i></a>
									</div>
									<div class="link">
										<a href="//{{$member->instagram}}"><i class="socialink fa fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="member-name">{{$member->name}}</div>
						<div class="member-position">{{$member->role}}</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
		
			
		</div>
	</div>
</div>

@endsection