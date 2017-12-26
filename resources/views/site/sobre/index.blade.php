@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes - Sobre</title>
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('assets/images/parallax/sobre-a-elitesan.jpg')">
  	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">CONHEÇA MAIS SOBRE A ELITESAN</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Segurança, Qualidade e Respeito ao Meio Ambiente</span>

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
				<div class="col-md-9">

					<img class="pull-left" src="assets/images/sobre/elitesan-left-col.png" alt="" />

					<div class="heading-title">
						<h2>Sobre a ELITESAN?</h2>
					</div>

					<p>A <span class="is-primary-color">ELITESAN</span> é uma empresa certificada e especializada no controle microbiológico em ambientes fechados, também conhecido como <span class="is-secondary-color">sanitização</span>, promovendo significante aumento na qualidade de vida de  seus clientes.</p>
          <p>Atráves deste processo de sanitização, a ELITESAN elimina de forma segura e eficiente os vírus, ácaros, bactérias e fungos do ar e superfícies reduzindo os sintomas e contágio de doenças respiratórias como gripes, resfriados, asma, rinite alérgica, sinusite, bronquite e outras. </p>

					<div class="row margin-top-60">

						<div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Missão</h3>
								<p class="is-primary-color">Trabalhamos com uma missão</p>
							</div>

              <p class="size-14 justify">Promover sanitizações tornando o ambiente isento dos microorganismos transmissores doenças, alergias, e complicações respiratórias
                com responsabilidade socioambiental, proporcionando aos nossos clientes saúde, conforto, segurança e qualidade de vida.</p>
						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Visão</h3>
								<p class="is-primary-color">Sabemos onde queremos chegar</p>
							</div>

              <p class="size-14 justify">Ser a empresa líder de mercado, superar os padrões convencionais em sanitização de ambientes, com inovações tecnológicas e ser referência em suas especializações.</p>
						</div>

						<div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Valores</h3>
								<p class="is-primary-color">Cuidamos do "como chegar"</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Compromisso e responsabilidade;</li>
                <li><i class="fa fa-check text-info"></i> Pontualidade;</li>
                <li><i class="fa fa-check text-info"></i> Competência e inovação;</li>
                <li><i class="fa fa-check text-info"></i> Interação socioambiental;</li>
                <li><i class="fa fa-check text-info"></i> Parceria de respeito com clientes e colaboradores;</li>
                <li><i class="fa fa-check text-info"></i> Foco na qualidade;</li>
                <li><i class="fa fa-check text-info"></i> Estratégia e competitividade ética.</li>
              </ul>

						</div>

					</div>


					<div class="margin-top-30">

						<div class="heading-title heading-border-bottom heading-color text-center">
							<h3>Por Que Escolher a ELITESAN?</h3>
							<p>3S's - Simples, segura, sem riscos</p>
						</div>
            <p>A <span class="is-primary-color">ELITESAN</span> é especialista em Sanitização de Ambientes, empregando o que há de mais atual em tecnologia,
              segurança e produtos para satisfazer as necessidades e garantir o bem estar de nossos clientes a  e saúde ambiental.</p>
            <div class="row">


							<div class="col-sm-6">
								<ul class="list-unstyled list-icons">
									<li><i class="fa fa-check text-success"></i> Equipamentos de última geração.</li>
									<li><i class="fa fa-check text-success"></i> Produtos registrados no Ministério da Saúde.</li>
									<li><i class="fa fa-check text-success"></i> Pontualidade.</li>
									<li><i class="fa fa-check text-success"></i> Profissionais idôneos.</li>
									<li><i class="fa fa-check text-success"></i> Responsabilidade ambiental.</li>
								</ul>
							</div>

							<div class="col-sm-6">
								<ul class="list-unstyled list-icons">
									<li><i class="fa fa-check text-success"></i> Licença Sanitária.</li>
									<li><i class="fa fa-check text-success"></i> Licença Ambiental.</li>
									<li><i class="fa fa-check text-success"></i> Licença e Regularidade junto ao IBAMA.</li>
									<li><i class="fa fa-check text-success"></i> Colaboradores treinados e certificados.</li>
									<li><i class="fa fa-check text-success"></i> Laudo e certificado das aplicações.</li>
								</ul>
							</div>

						</div>

					</div>

				</div>
				<!-- /LEFT -->

				<!-- RIGHT -->
				<div class="col-md-3">

					<div class="box-static box-border-top margin-bottom-60">
						<div class="box-title">
							<h4>Por que sanitizar o ambiente?</h4>
						</div>
						<ul class="list-unstyled list-icons padding-15 nopadding-bottom">
							<li class="margin-bottom-20">
								<i class="fa fa-check text-info size-18"></i>
								<span class="block bold size-18">Ácaros</span>
								<small>Causadores de rinite alérgica</small>
							</li>
							<li class="margin-bottom-20">
								<i class="fa fa-check text-info size-18"></i>
								<span class="block bold size-18">Vírus</span>
								<small>H1N1, Gripes e muitas outras</small>
							</li>
							<li class="margin-bottom-20">
								<i class="fa fa-check text-info size-18"></i>
								<span class="block bold size-18">Bactérias</span>
								<small>Tuberculose, Coqueluche, Tétano, Meningite e outras</small>
							</li>
							<li class="margin-bottom-20">
								<i class="fa fa-check text-info size-18"></i>
								<span class="block bold size-18">Fungos</span>
								<small>Contaminam alimentos, degradam estruturas e superfícies</small>
							</li>
						</ul>

						<hr />

					</div>

					<!-- FACEBOOK -->
  					<iframe class="hidden-xs" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Felitesanitizacoes&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>

				</div>
				<!-- /RIGHT -->

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
