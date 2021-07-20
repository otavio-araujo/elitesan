@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes | Sanitização de indústrias</title>
  <meta name="keywords" content="sanitização de ambientes, sanitização de indústrias," />
  <meta name="description" content="Detalhes e curiosidades da sanitização de indpustrias." />
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/locais-de-aplicacao/parallax/industria.jpg")}}')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE INDÚSTRIAS</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Higiene e saúde no ambiente de produção é indispensável!</span>

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

					<img class="pull-left" src="{{asset('assets/images/locais-de-aplicacao/icones/industria.png')}}" alt="Sanitização de Indústrias" />

					<div class="heading-title">
						<h2>Sanitização de Indústrias</h2>
					</div>

          <p class="justify">O serviço de <span class="is-primary-color bold">sanitização de indústrias</span> é uma etapa essencial para garantir a limpeza e a higiene de ambientes que
            lidam com o consumidor de forma direta ou indireta.</p>
          <p class="justify">Essa medida é importante porque as fábricas, por exemplo,
            passam por fiscalizações constantes e rigorosas com o objetivo de assegurar as condições mínimas de higiene no local.</p>
        </div>

				<div class="row margin-top-60">

						<div class="col-sm-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>A Importância</h3>
								<p class="is-primary-color">Por que sanitizar minha indústria?</p>
							</div>

              <p class="size-14 justify">Além da preocupação com o consumidor que irá receber o produto e com os órgãos de fiscalização,
                há também a preocupação com a produtividade. A limpeza do ambiente é fundamental para que as máquinas não parem e a
                produção continue acontecendo.</p>

              <p class="size-14 justify">Ao contratar o serviço da Ecofrt e planejar a realização do procedimento, a sanitização de indústrias pouco influi na parada de máquinas e colaboradores, evitando desperdício de tempo e energia.</p>
						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>As Vantagens</h3>
								<p class="is-primary-color">Vantagens da Sanitização de Indústrias</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Produto inovador e ecologicamente correto, assegurando a qualidade de vida, preservando a saúde e o meio ambiente;</li>
                <li><i class="fa fa-check text-info"></i> Equipamentos de tecnologia de ponta para correta aspersão do produto;</li>
                <li><i class="fa fa-check text-info"></i> Ambiente limpo e livre de micro-organismos, como fungos e bactérias;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de agendamento da sanitização de indústria de acordo com os horários disponíveis do cliente;</li>
                <li><i class="fa fa-check text-info"></i> Não deixa resíduos, não mancha e não deixa cheiro;</li>
                <li><i class="fa fa-check text-info"></i> Aplicação relativamente rápida;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de utilização do ambiente duas horasapós o término do procedimento de sanitização.</li>
              </ul>

						</div>

						<div class="col-sm-5">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>O Procedimento de Sanitização</h3>
								<p class="is-primary-color">Como é feita a Sanitização nas Indústrias?</p>
							</div>

              <p class="size-14 justify">O processo de sanitização de inústrias é realizado basicamente seguindo os procedimentos básicos
                para sanitização em qualquer outro ambiente.</P>
              <p class="size-14 justify">
                Primeiramente é realizada uma inspeção técnica e detalhada para avaliar o local. Em seguida, é realizada uma análise para definir
                as metodologias e produtos que serão utilizados para o caso concreto.
              </p>
              <p class="size-14 justify">
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
