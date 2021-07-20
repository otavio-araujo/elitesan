@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes | Sanitização de empresas</title>
  <meta name="keywords" content="sanitização de ambientes, sanitização de empresas" />
  <meta name="description" content="Texto sobre como é feita a sanitização em empresas." />
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/locais-de-aplicacao/parallax/empresa.jpg")}}')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE EMPRESAS</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Reduza as faltas no trablaho por causa de doenças!</span>

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

					<img class="pull-left" src="{{asset('assets/images/locais-de-aplicacao/icones/empresa.png')}}" alt="Sanitização de Empresas" />

					<div class="heading-title">
						<h2>Sanitização de Empresas</h2>
					</div>

          <p class="justify">O serviço de <span class="is-primary-color bold">sanitização de empresas</span> tem como finalidade
            garantir a qualidade de ar para seus colaboradores e clientes.</p>
        </div>

				<div class="row margin-top-60">

						<div class="col-sm-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>A Importância</h3>
								<p class="is-primary-color">Por que sanitizar minha empresa?</p>
							</div>

              <p class="size-14">Alta concentração e rotativida de clientes e colaboradores.</p>

              <p class="size-14">Eliminação dos microorganismos causadores de doenças.</p>

              <p class="size-14">80% das faltas no trabalho são ocasionadas por Gripes e Resfriados.</p>
						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>As Vantagens</h3>
								<p class="is-primary-color">Vantagens da Sanitização de Empresas</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Garantia da qualidade e sanidade do ambiente utilizado;</li>
                <li><i class="fa fa-check text-info"></i> Eliminação do odor causado pela contaminação microbiológica;</li>
                <li><i class="fa fa-check text-info"></i> Prevenção de crises alérgicas, doenças infecciosas e micoses;</li>
                <li><i class="fa fa-check text-info"></i> Redução significativa de faltas no trabalho ocasionadas por gripes e resfriados;</li>
                <li><i class="fa fa-check text-info"></i> Redução do risco de contaminação cruzada entre os clientes e usuários;</li>
                <li><i class="fa fa-check text-info"></i> Aumento significativo na duração dos equipamentos;</li>
                <li><i class="fa fa-check text-info"></i> Diferencial competitivo para a empresa que coloca a saúde de seus colaboradores e clientes como uma preocupação essencial;</li>
                <li><i class="fa fa-check text-info"></i> Equipamentos e utencílios limpos e livre de micro-organismos, como fungos e bactérias;</li>
                <li><i class="fa fa-check text-info"></i> Película protetora que previne a proliferação futura de material biológico infectante;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de agendamento da sanitização de empresas de acordo com os horários disponíveis do cliente;</li>
                <li><i class="fa fa-check text-info"></i> Não deixa resíduos, não mancha e não deixa cheiro;</li>
                <li><i class="fa fa-check text-info"></i> Aplicação relativamente rápida;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de utilização dos ambientes tratados duas horas após o término do procedimento de sanitização.</li>
              </ul>

						</div>

						<div class="col-sm-5">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>O Procedimento de Sanitização</h3>
								<p class="is-primary-color">Como é feita a Sanitização em Empresas?</p>
							</div>

              <p class="size-14 ">O processo de sanitização de empresas é realizado basicamente seguindo os procedimentos básicos
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
