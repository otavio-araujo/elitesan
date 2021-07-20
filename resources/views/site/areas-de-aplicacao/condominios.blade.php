@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes | Sanitização de condomínios</title>
  <meta name="keywords" content="sanitização de ambientes, sanitização de condomínios, sanitização em condomínios" />
  <meta name="description" content="Texto sobre como é feita a sanitização em condomínios." />
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/locais-de-aplicacao/parallax/condominio.jpg")}}')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE CONDOMÍNIOS</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Saúde, higiene e limpeza para você e sua família!</span>

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
				<div class="col-md-10 col-md-offset-1">

					<img class="pull-left" src="{{asset('assets/images/locais-de-aplicacao/icones/condominio.png')}}" alt="Sanitização de Condomínios" />

					<div class="heading-title">
						<h2>Sanitização de Condomínios</h2>
					</div>


          <p class="justify">Ambientes de uso comuns como churrasqueiras, piscinas, halls de entrada entre outros demandam uma atenção especial
            na limpeza e concervação. </p>
          <p class="justify">a <span class="is-primary-color bold">sanitização de condomínios</span> é sem dúvida uma medida eficaz para garantir a saúde e limpeza
            destes ambientes.</p>
        </div>

				<div class="row margin-top-60">

						<div class="col-sm-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>A Importância</h3>
								<p class="is-primary-color">Por que sanitizar condomínios?</p>
							</div>

              <p class="size-14">Ácaros, fungos, vírus e bactérias podem causar doenças e alergias;</p>
              <p class="size-14">Locais de uso comum demandam maior higiene e limpeza;</p>
              <p class="size-14">Preservação da saúde e limpeza dos ambientes;</p>

						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>As Vantagens</h3>
								<p class="is-primary-color">Vantagens da Sanitização de condomínios</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Garantia da qualidade e sanidade do ambiente utilizado;</li>
                <li><i class="fa fa-check text-info"></i> Eliminação do odor causado pela contaminação microbiológica;</li>
                <li><i class="fa fa-check text-info"></i> Prevenção de crises alérgicas, doenças infecciosas e micoses;</li>
                <li><i class="fa fa-check text-info"></i> Redução do risco de contaminação cruzada entre os condôminos e colaboradores;</li>
                <li><i class="fa fa-check text-info"></i> Equipamentos e utencílios limpos e livre de micro-organismos, como fungos e bactérias;</li>
                <li><i class="fa fa-check text-info"></i> Película protetora que previne a proliferação futura de material biológico infectante;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de agendamento da sanitização de condomínios de acordo com os horários disponíveis do cliente;</li>
                <li><i class="fa fa-check text-info"></i> Não deixa resíduos, não mancha e não deixa cheiro;</li>
                <li><i class="fa fa-check text-info"></i> Aplicação relativamente rápida;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de utilização dos ambientes tratados duas horas após o término do procedimento de sanitização.</li>
              </ul>

						</div>

						<div class="col-sm-5">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>O Procedimento de Sanitização</h3>
								<p class="is-primary-color">Como é feita a Sanitização em condomínios?</p>
							</div>

              <p class="size-14 ">O processo de sanitização de condomínios é realizado basicamente seguindo os procedimentos básicos
                para sanitização em qualquer outro ambiente.</P>
              <p class="size-14 ">
                Primeiramente é realizada uma inspeção técnica e detalhada para avaliar o local. Em seguida, é realizada uma análise para definir
                as metodologias e produtos que serão utilizados para o caso concreto.
              </p>
              <p class="size-14 ">
                Após a análise e definição dos produtos e metodologias é feita a aplicação através de nebulização à frio
                (também conhecida com atomização ultra-baixo-volume - U.B.V) em todo o ambiente - paredes, teto, chão e superfícies
              de móveis, objetos e utencílios.</p>
              <p class="size-14 justify">
                Em apenas duas horas, o local já está liberado para utilização novamente de forma Simples, Segura e Sem Riscos - 3S's.
              </p>


						</div>

					</div>

          @include('_includes.site.page-elements.vantagens-elitesan')

				</div>
				<!-- /LEFT -->

		</div>
    @include('_includes.site.page-elements.call-out')
	</section>
	<!-- /CONTEÚDO - SOBRE A ELITESAN -->
@endsection

@section('custom-js')

@endsection
