<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		{{-- meta-tags and title --}}
		@yield('meta-title')
		{{-- /meta-tags and title --}}

		{{-- default css's --}}
		@include('_includes.site.css.default')
		{{-- /default css's --}}

		{{-- css específicos para uma página --}}
		@yield('custom-css')
		{{-- /css específicos para uma página --}}

		<!-- OVERRIDES -->
		<link href="{{asset('css/overrides.css')}}" rel="stylesheet" type="text/css" />
		<!-- HELPERS -->
		<link href="{{asset('css/helpers.css')}}" rel="stylesheet" type="text/css" />

	</head>

	<body class="smoothscroll enable-animation">

		{{-- top-bar --}}
		@yield('top-bar')
		{{-- /top-bar --}}

		<!-- wrapper -->
		<div id="wrapper">

			@include('_includes.site.page-elements.menu')

			@yield('top-banner')

			@yield('content')

			@include('_includes.site.page-elements.footer')

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		{{-- default Js's --}}
		@include('_includes.site.js.default')
		{{-- /default Js's --}}

		@yield('custom-js')

	</body>
</html>
