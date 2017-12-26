@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes</title>
  <meta name="keywords" content="HTML5,CSS3,Template" />
  <meta name="description" content="" />
  <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

  <!-- mobile settings -->
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
@endsection
{{-- /Título e Meta Tagas --}}

{{-- topbar --}}
@section('top-bar')
  @include('_includes.site.page-elements.top-bar')
@endsection

@section('top-banner')
  <!--
  	PAGE HEADER

  	CLASSES:
  		.page-header-xs	= 20px margins
  		.page-header-md	= 50px margins
  		.page-header-lg	= 80px margins
  					.page-header-xlg= 130px margins
  		.dark		= dark page header
  		.light		= light page header
  -->
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('assets/images/parallax/sobre-a-elitesan.jpg')">
  	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">

  		<h1>SOBRE A ELITESAN</h1>
  		<span class="font-lato size-18 weight-300">Segurança, Qualidade e Respeito ao Meio Ambiente.</span>

  	</div>
  </section>
  <!-- /PAGE HEADER -->
@endsection

@section('content')
  <section>
    Conteúdo Aqui...
  </section>
@endsection

@section('custom-js')
  <!-- REVOLUTION SLIDER -->
  <script type="text/javascript" src="{{asset('assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>
@endsection
