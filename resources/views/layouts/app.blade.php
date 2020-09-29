<!doctype html>
<html lang="en-US">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		
		<title>#THUMBI: Portal Personal</title>

		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} " type="text/css" media="all"/>
		<link 
		href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
		rel="stylesheet"  type='text/css'>
		
		<link rel="stylesheet" href="{{ asset('css/font-materialdesign.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('css/slick.css') }}"  type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css')}}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}"  type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('css/style-brave.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}"  type="text/css" media="all" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Manuale:400,400i,500,500i,600,600i,700,700i%7CSource+Sans+Pro:300,400,400i,600,700" />
		@yield('css')
		
			<!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->

	</head>
	<body>
		<div id="body_hider" class="hider_flag"></div>
		<div id="body_hider_full" class="hider_flag"></div>
		<div class="hidden-bar desktop-panel">
			<div class="hidden-bar-inner">
				<div id="hidden-bar-logo" class="hidden-bar-logo">
					<a href="index.html"><img src="{{asset('images/logo_brave.png')}} " alt="" /></a>
				</div>
				<div class="mb-5"></div>
				<div class="widget">
					<div class="widget-title-wrapper">
						<div class="widget-title">
							NA KONTAKONI
							<div class="simple-line"></div>
						</div>
						<div class="simple-line"></div>
					</div>
					<div class="widget-social text-center">

						<a href="https://www.instagram.com/blerimiseni/"><i class="fa fa-instagram"></i></a>
						<a href="https://www.facebook.com/blerimisenii"><i class="fa fa-facebook"></i></a>
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
					<!-- TEMPORARY STATIC PICTURES (WIDGET GALLERY) -->
					<div class="widget-gallery">
						<a href="{{asset('images/gallery/gallery_1.jpg')}} " class="mfp-image gallery-item">
							<img src="{{asset('images/gallery/thumb/gallery_1.jpg')}}" alt="" />
						</a>
						<a href="{{asset('images/gallery/gallery_2.jpg')}}" class="mfp-image gallery-item">
							<img src="{{asset('images/gallery/gallery_2.jpg')}}" alt="" />
						</a>
						<a href="{{asset('images/gallery/gallery_3.jpg')}}" class="mfp-image gallery-item">
							<img src="{{asset('images/gallery/gallery_3.jpg')}}" alt="" />
						</a>
						<a href="{{asset('images/gallery/gallery_4.jpg')}}" class="mfp-image gallery-item">
							<img src="{{asset('images/gallery/gallery_4.jpg')}}" alt="" />
						</a>
						<a href="{{asset('images/gallery/gallery_5.jpg')}}" class="mfp-image gallery-item">
							<img src="{{asset('images/gallery/gallery_5.jpg')}}" alt="" />
						</a>
						<a href="{{asset('images/gallery/gallery_6.jpg')}}" class="mfp-image gallery-item">
							<img src="{{asset('images/gallery/gallery_6.jpg')}}" alt="" />
						</a>
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
			</div>
		</div>
		<div class="hidden-bar mobile-panel">
			<div class="hidden-bar-inner">
				<div id="hidden-bar-logo-2" class="hidden-bar-logo">
					<a href="index.html"><img src="{{ asset('images/logo_brave.png') }} " alt="" /></a>
				</div>
				<div class="mobile-menu">
					<ul class="nav-collapse navbar-nav">
						<li>
							<a href="{{ url('') }}">Ballina </a>
						</li>
						<li>
							<a href="{{ route('team.index') }}">Rreth Nesh</a>
						</li>
						<li>
							<a href="#">Thumbimet <i class="fa fa-angle-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{ route('pergjithshme') }}">Thumbimet e Pergjithshme</li>
								<li><a href="{{ route('keqperdorime') }}">Thumbo Keqperdorimet </li>
								<li><a href="{{ route('korrupsioni') }}">Thumbo Korrupsionin</a></li>
								<li><a href="{{ route('partite') }}">Thumbo Partite Politike</a></li>
							</ul>
						</li>
						<li><a href="#">Raporto</a></li>
						
					</ul>
				</div>
				<div class="simple-line mt-2 mb-2"></div>
				<div class="widget">
					<div class="widget-title-wrapper">
						<div class="widget-title white">
							GET CONNECTED
						</div>
					</div>
					<div class="widget-social text-center">

						<a href="https://www.instagram.com/blerimiseni/"><i class="fa fa-instagram"></i></a>
						<a href="https://www.facebook.com/blerimisenii"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div id="search-hider"></div>
		<div class="search-form-top">
			<div class="search-form-top-inner">
				<form class="form-search">
					<input type="text" value="" name="s" id="search_top" class="highlighted" placeholder="Shkruaj dhe shtype ENTER..." />
				</form>
				<div class="search-close">
					<div class="line line-1"></div>
					<div class="line line-2"></div>
					<div class="line line-3"></div>
				</div>
			</div>
		</div>
		<div class="site">
			<header class="header header-sticky">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="sticky-logo">
								<a href="index.html">
									<img src="{{ asset('images/logo_brave_sticky.png') }}" alt="" />
								</a>
							</div>
							<div class="sticky-side-menu">
								<div class="sidebar-trigger hidden-bar-toggle">
									<div class="line line-1"></div>
									<div class="line line-2"></div>
									<div class="line line-3"></div>
								</div>
							</div>
							<div class="sticky-menu">
								<div class="main-menu">
									<div class="main-menu-inner">
										<ul class="nav-collapse navbar-nav">
											<li>
												<a href="{{ url('') }}">Ballina</a>
											</li>
											<li>
												<a href="{{ route('team.index') }}">Rreth Nesh </i></a>
											</li>
											<li>
												<a href="#">Thumbimet <i class="fa fa-angle-down"></i></a>
												<ul class="sub-menu">
													<li><a href="{{ route('pergjithshme') }}">Thumbimet e Pergjithshme</li>
													<li><a href="{{ route('keqperdorime') }}">Thumbo Keqperdorimet </li>
													<li><a href="{{ route('korrupsioni') }}">Thumbo Korrupsionin</a></li>
													<li><a href="{{ route('partite') }}">Thumbo Partite Politike</a></li>
												</ul>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<header class="header header-desktop">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 hidden-sm hidden-xs pl-4">
							<div class="menu-social">
								<a href="https://www.facebook.com/blerimisenii"><i class="fa fa-facebook"></i></a>
								<a href="https://www.instagram.com/blerimiseni/"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div id="logo" class="text-center text-left-sm">
								<a href="index.html">
									<img src="{{ asset('images/logo_brave.png') }}" class="hidden-sm hidden-xs" alt="Logo" />
									<img src="{{ asset('images/logo_brave_sticky.png') }}" class="hidden-lg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 pr-4">
							<div class="side-menu">
								<div class="sidebar-trigger hidden-bar-toggle">
									<div class="line line-1"></div>
									<div class="line line-2"></div>
									<div class="line line-3"></div>
								</div>
								<div class="search-trigger search-trigger-header">
									<i class="fa fa-search"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 p-0">
							<div class="main-menu">
								<div class="main-menu-inner">
									<ul class="nav-collapse navbar-nav">
										<li>
											<a href="{{ url('') }}">Ballina </a>
										</li>
										<li>
											<a href="{{ route('team.index') }}">Rreth Nesh </a>
										</li>
										<li>
											<a href="#">Thumbimet <i class="fa fa-angle-down"></i></a>
											<ul class="sub-menu">
												<li><a href="{{ route('pergjithshme') }}">Thumbimet e Pergjithshme</li>
												<li><a href="{{ route('keqperdorime') }}">Thumbo Keqperdorimet </li>
												<li><a href="{{ route('korrupsioni') }}">Thumbo Korrupsionin</a></li>
												<li><a href="{{ route('partite') }}">Thumbo Partite Politike</a></li>
											</ul>
										</li>

										<li><a href="{{ route('contact') }}">Raporto</a></li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			
			<!-- MAIN SECTION START -->
			
			@yield('content')

			<!-- MAIN SECTION END -->


			<div class="copyright">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<ul class="footer-menu">
								<li><a href="{{ url('') }}">BALLINA</a></li>
								<li><a href="{{ route('team.index') }}">RRETH NESH</a></li>
								<li><a href="{{ route('contact') }}">RAPORTO</a></li>
							</ul>
						</div>
						<div class="col-sm-6">
							<div class="text-right text-center-xs mr-2">Developed by <a href="https://www.instagram.com/drinor.d/">DalipiD</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="hook-to-top" class="prk_radius">
			<i class="fa fa-arrow-up"></i>
		</div>
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script>
		
		</script>
		<script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/classie.js') }}"></script>
		<script src="{{ asset('js/slick.js') }}"></script>
		<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		@yield('scripts')
	</body>
</html>