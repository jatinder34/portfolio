<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- // CSS FILES // -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/img/favicon.jpg') }}">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ URL::asset('assets/bootstrap-4.1.3-dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<!-- Core Navigation -->
	<link rel="stylesheet" href="{{ URL::asset('assets/js/corenav-master/corenav-master/dist/coreNavigation-1.1.3.min.css') }}">
	<!-- Navbar Style -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/navbar-style.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}">
	<!-- Line Icons -->
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<!-- LightBox -->
	<link rel="stylesheet" href="{{ URL::asset('assets/js/lightbox/dist/css/lightbox.min.css') }}">
	<!-- Style -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
	<!-- Custom -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css') }}">

	<!--// SITES TITLE // -->
	<title>Jatin</title>

</head>

<body>
        <!--  Preloader -->
        <div class="preloader-holder">
                <div id="loader">
                        <div id="shadow"></div>
                        <div id="box"></div>
                </div>
        </div>

        @yield('content')
        <!-- FOOTER -->
        <footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p>&copy; 2018 Made by BootstrapMess.</p>
				</div>
				<div class="col-lg-6 text-right">
					<p><a href="https://gumroad.com/smdesigns"><b>Get More Free Bootstrap Template</b>.</a></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- // JS FILES // -->

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{ URL::asset('assets/js/jquery.easing.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ URL::asset('assets/bootstrap-4.1.3-dist/js/bootstrap.min.js') }}"></script>
	<!-- Core Navigation -->
	<script src="{{ URL::asset('assets/js/corenav-master/corenav-master/dist/coreNavigation-1.1.3.min.js') }}"></script>
	<!-- Owl Carousel -->
	<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Wow -->
	<script src="{{ URL::asset('assets/js/wow-1.3.0.min.js') }}"></script>
	<!-- LightBox -->
	<script src="{{ URL::asset('assets/js/lightbox/dist/js/lightbox.min.js') }}"></script>
	<!-- Toaster -->
	<script src="{{ URL::asset('assets/js/jquery.toaster.js') }}"></script>	
	<!-- Custom -->
	<script src="{{ URL::asset('assets/js/custom.js') }}"></script>
	<!-- FrontEnd Custom -->
	<script src="{{ URL::asset('assets/js/FrontEnd/custom.js') }}"></script>
</body>

</html>