@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes | Sanitização de ônibus</title>
  <meta name="keywords" content="sanitização de ambientes, sanitização de ônibus urbano, sanitização de ônibus de viagem, sanitização de ônibus" />
  <meta name="description" content="Texto sobre como é feita a sanitização em ônibus." />
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/locais-de-aplicacao/parallax/onibus.jpg")}}')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE ÔNIBUS URBANOS, VIAGENS E TURISMO</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Limpeza e higiene faz parte do conforto!</span>

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

					<img class="pull-left" src="{{asset('assets/images/locais-de-aplicacao/icones/onibus.png')}}" alt="Sanitização de Ônibus Urbanos, Viagens e Turismo" />

					<div class="heading-title">
						<h2>Sanitização de Ônibus</h2>
					</div>

          <p class="justify">O serviço de <span class="is-primary-color bold">sanitização de ônibus de viagem, turismo e urbanos</span> tem como finalidade
            garantir a saúde dos usuários do ônibus durante suas viagens sejam elas municipais, intermunicipais ou interestaduais.</p>
          <p class="justify">Estas viagens muitas vezes chegam a durar horas. Por esta razão, a Sanitização de Veículos se faz necessária para garantir
            a saúde dos clientes, usuários e colaboradores que utilizam os ônibus urbanos, de turismo ou de viagens.
          </p>
        </div>

				<div class="row margin-top-60">

						<div class="col-sm-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>A Importância</h3>
								<p class="is-primary-color">Por que sanitizar ônibus?</p>
							</div>

              <p class="size-14">A presença de estofados, carpetes e a manutenção incorreta do ar condicionado leva à exposição de agentes que deflagram alergias respiratórias.</p>

              <p class="size-14">Ambientes fechados como os ônibus, ao ligar o ar condicionado pode potencializar a concentração de fungos aproximadamente duas vezes.</p>

              <p class="size-14">Devida a alto circulação e concentração de usuários e clientes, as chances de contaminação cruzada de doenças é altíssima.</p>
						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>As Vantagens</h3>
								<p class="is-primary-color">Vantagens da Sanitização de Õnibus</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Garantia da qualidade e sanidade do ambiente utilizado;</li>
                <li><i class="fa fa-check text-info"></i> Eliminação do odor causado pela contaminação microbiológica;</li>
                <li><i class="fa fa-check text-info"></i> Prevenção de crises alérgicas e doenças infecciosas;</li>
                <li><i class="fa fa-check text-info"></i> Redução do risco de contaminação cruzada entre os clientes e usuários;</li>
                <li><i class="fa fa-check text-info"></i> Aumento significativo na duração dos estofados;</li>
                <li><i class="fa fa-check text-info"></i> Diferencial competitivo para a empresa que coloca a saúde de seus clientes como uma preocupação essencial;</li>
                <li><i class="fa fa-check text-info"></i> Õnibus limpos e livre de micro-organismos, como fungos e bactérias;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de agendamento da sanitização de contêineres de acordo com os horários disponíveis do cliente;</li>
                <li><i class="fa fa-check text-info"></i> Não deixa resíduos, não mancha e não deixa cheiro;</li>
                <li><i class="fa fa-check text-info"></i> Aplicação relativamente rápida;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de utilização dos veículos tratado duas horas após o término do procedimento de sanitização.</li>
              </ul>

						</div>

						<div class="col-sm-5">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>O Procedimento de Sanitização</h3>
								<p class="is-primary-color">Como é feita a Sanitização em Ônibus?</p>
							</div>

              <p class="size-14 ">O processo de sanitização de ônibus de viagem, ônibus urbanos e ônibus de turismo é realizado basicamente seguindo os procedimentos básicos
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
