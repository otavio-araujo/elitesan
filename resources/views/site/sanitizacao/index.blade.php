@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes - O que é Sanitização de Ambientes e como funciona?</title>
  <meta name="keywords" content=" sanitização de ambientes, sobre a elitesan, sanitização de empresas, sanitização de escolas,
                                  sanitização de cinemas, sanitização de hospitais" />
  <meta name="description" content="" />
  <meta name="Author" content="Elitesan | Sanitização de Ambientes" />

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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/parallax/beneficios.jpg")}}')">
  	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE AMBIENTES</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">O que é e como funciona?</span>

  	</div>
  </section>
  <!-- /PAGE HEADER -->
@endsection

@section('content')
  <!-- CONTEÚDO - SOBRE A ELITESAN -->
	 <section class="margin-bottom-0 padding-bottom-0">
		<div class="container">

			<div class="row">

				<!-- LEFT -->
				<div class="col-md-10 col-sm-offset-1">

					<img class="pull-right" src="{{asset('assets/images/sanitizacao/sanitizacao-exclamacao.png')}}" alt="" />

					<div class="heading-title">
						<h2 class="is-primary-color">O que é Sanitização de Ambientes?</h2>
					</div>

					<p>Sanitização de ambientes significa eliminar Vírus, Fungos, Ácaros e Bactérias,
            tornando o ambiente mais saudável e seguro para seus familiáres, colaboradores, clientes e demais pessoas.</p>
          <p>Atráves deste processo de sanitização, a ELITESAN elimina de forma segura e eficiente os vírus, ácaros, bactérias e fungos do ar e superfícies reduzindo os
            sintomas e contágio de doenças respiratórias como gripes, resfriados, asma, rinite alérgica, sinusite, bronquite e outras. </p>

					<div class="row margin-top-100">
						<div class="col-sm-12">

              <div class="heading-title text-center">
                <h2 class="is-secondary-color">Como funciona a Sanitização de Ambientes?</h2>
              </div>

              <ul class="process-steps nav nav-tabs nav-justified margin-top-50">
    						<li>
    							<a href="#inspecao" data-toggle="tab">1</a>
    							<h5>Inspeção Técnica</h5>
    						</li>
    						<li>
    							<a href="#analise" data-toggle="tab">2</a>
    							<h5>Análise de Produtos e Metodologias</h5>
    						</li>
    						<li>
    							<a href="#aplicacao" data-toggle="tab">3</a>
    							<h5>Aplicação e Tratamento do Ambiente</h5>
    						</li>
    						<li>
    							<a href="#resultado" data-toggle="tab">4</a>
    							<h5>Resultado: Eliminação dos Microorganismos</h5>
    						</li>
    						<li>
    							<a href="#satisfacao" data-toggle="tab">5</a>
    							<h5>Satisfação e Bem Estar do Cliente</h5>
    						</li>
    					</ul>
              <hr>
    					<div class="tab-content margin-top-15 margin-bottom-30">
    						<div class="tab-pane active" id="inspecao">
                  <h4 class="is-secondary-color">Inspeção Técnica</h4>
                  Realizada por um técnico especialista, a inspeção técnica é realizada para coletar dados e informaões a respeito do ambiente
                  a ser tratado que serão utilizados no processo de análise de produtos e metodologias e na elaboração de propostas financeiras.
    						</div>

    						<div class="tab-pane" id="analise">
                  <h4 class="is-secondary-color">Análise de Produtos e Metodologias</h4>
                  Após a coleta de dados da inspeção técnica será defido o método de aplicação e o produto que será utlizado na aplicação.
    						</div>

    						<div class="tab-pane" id="aplicacao">
                  <h4 class="is-secondary-color">Aplicação e Tratamento do Ambiente</h4>
                  Utilizando equipamentos de ultima geração, o produto líquido é fracionado e nebulizado em micropartículas no ambiente
                   - (Atomização U.B.V - Ultra Baixo Volume), formando uma névoa fina que se mantem em suspenção no ar, aderindo às
                   superfícies, eliminando e impedindo a proliferação dos micro-organismos por até seis meses. O Ambiente pode ser
                    utilizado 2 horas após a aplicação.
    						</div>

    						<div class="tab-pane" id="resultado">
                  <h4 class="is-secondary-color">Resultado: Eliminação dos Microorganismos</h4>
    							Após a aplicação o resultano é a eliminação dos <span class="text-red">Ácaros, Fungos, Vírus e Bactérias</span> tornando o ambiente
                  mais saudável e seguro para você, sua família, colaboradores, clientes, patrimônio e investimento.
    						</div>

    						<div class="tab-pane" id="satisfacao">
                  <h4 class="is-secondary-color">Satisfação e Bem Estar do Cliente</h4>
                  Satisfação, Bem Estar e Proteção garantida!
    						</div>

                <div class="margin-top-30 text-center nopadding">
                  <a class="btn btn-info   btn-lg size-15 lightbox" href="https://www.youtube.com/watch?v=oRVpMv3tufA" data-plugin-options='{"type":"iframe"}'>ASSISTA AO VÍDEO EXPLICATIVO</a>
                </div>
    					</div>


						</div>
					</div>

				</div>
				<!-- /LEFT -->
			</div>

		</div>
    <!-- callout -->
    <div class="row padding-30 bg-light-gray">
      <div class="container callout alert alert-border">

        <div class="row">

          <div class="col-md-9 col-sm-12 text-left"><!-- left text -->
            <h3>Ligue agora e informe o código <span><strong class="is-primary-color">#elitesan-wd15</strong></span> e ganhe 15% de desconto!</h3>
            <p class="font-lato weight-300 size-20 nomargin-bottom">
              Aproveite! Promoção por tempo limitado.
            </p>
          </div><!-- /left text -->


          <div class="col-md-3 col-sm-12 text-center"><!-- right btn -->
              <h5 class="bg-secondary-alpha-1 p-20 rounded-borders">
                <span class="word-rotator text-white" data-delay="2000">
                  <span class="items text-center">
                    <span><i class="fa fa-phone m-r-10"></i> <b>Londrina: </b>(43) 3336-0654<br /></span>
                    <span><i class="fa fa-phone m-r-10"></i> <b>Maringá: </b>&nbsp;(44) 3030-0655</span>
                  </span>
                </span><!-- /word rotator -->
              </h5>

          </div><!-- /right btn -->

          <div class="col-md-12 text-center">
            <a href="#" class="btn btn-3d btn-xlg btn-red">
              ORÇAMENTO RÁPIDO
              <span class="block font-lato">Solicite um orçamento rápido!</span>
            </a>
          </div>

        </div>

      </div>
    </div>
    <!-- /callout -->
	</section>
	<!-- /CONTEÚDO - SOBRE A ELITESAN -->
@endsection

@section('custom-js')
  <!-- REVOLUTION SLIDER -->
  <script type="text/javascript" src="{{asset('assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>
@endsection
