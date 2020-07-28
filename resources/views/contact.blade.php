@extends('layouts.app')
@section('content')
<div id="main">
	<div class="section section-bg-2 section-fixed pt-17 pb-17">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<h2 class="white manuale fw-bolder fz-40">RAPORTO NJE NGJARJE</h2>
						<h5 class="white fw-600 fz-20">Raportoni padrejtesite qe ju ka<br />Na ndihmoni te thumbojme</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section mt-7 mb-10">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h5 class="white fw-600 fz-22 mb-1">Raporto Nje Ngjarje</h5>
					<div class="simple-line"></div>
					<div class="mb-2"></div>
					<p>Nese dini ndonje rast ku i'u eshte bere padrejtesi juve apo te tjereve, jeni te ftuar te e raportoni ketu. Mesazhi juaj mund te jete anonim dhe nuk do te publikohet pa miratimin tuaj. Keni edhe mundesine per te derguar imazhe.</p>
					<div class="mb-4"></div>
					
					<form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data" class="contact-form" >
						@csrf
						<div class="row">
							<div class="col-md-12">
								<textarea class="highlighted" name="message" id="message" rows="8" placeholder="Pershkruaj Ngjarjen"></textarea>
								<div class="mb-2"></div>
							</div>
							<div class="col-md-4">
								<input type="text" class="highlighted" name="name" id="name" placeholder="Emri" />
								<div class="mb-2"></div>
							</div>
							<div class="col-md-4">
								<input type="text" class="highlighted" name="email" id="email" placeholder="Emaili" />
								<div class="mb-2"></div>
							</div>
							<div class="col-md-4">
									<label class="btn btn-primary highlighted pt-1 pb-1 mb-1 " for="my-file-selector">
									<input id="my-file-selector" type="file" style="display:none" 
									onchange="$('#upload-file-info').html(this.files[0].name)">
									<span class="text-muted">Dergo Imazhe</span> 
								</label>
								<span class='label label-info' id="upload-file-info"></span>
								<div class="mb-2"></div>
								
								
							</div>

							<div class="ml-2 ">
								<input type="submit" class="button" value="Dergo Mesazhin  "/>
							</div>
						</div>
					</form>

				</div>
				<div class="col-sm-4">
					<h5 class="white fw-600 fz-22 mb-1">INFORMACIONI PER KONTAKTIM</h5>
					<div class="simple-line"></div>
					<div class="mb-2"></div>
					<p>Nese e keni me te lehte te e raportoni rastin drejperdrejt tek ne, ketu mund te i gjeni te dhenat tona.</p>
					<div class="mb-4"></div>
					<h2 class="white fw-bolder lato fz-24 mb-1">Blerim Iseni</h2>
					<h4 class="white fw-600 lato fz-14 contact-info">Bujanoc</h4>
					<h4 class="white fw-600 lato fz-14 contact-info">+381 62 365022</h4>
					<div class="simple-line white thick mt-2 mb-2 mw-40"></div>
					<a class="fw-600 lato fz-14 contact-info" href="mailto:blerimiseni@hotmail.com">blerimiseni@hotmail.com</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection