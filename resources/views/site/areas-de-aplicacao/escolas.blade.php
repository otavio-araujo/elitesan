@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes | Sanitização de escolas, colégios e faculdades</title>
  <meta name="keywords" content="sanitização de ambientes, sanitização de escolas, sanitização de colégios, sanitização de faculdades" />
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/locais-de-aplicacao/parallax/escola.jpg")}}')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE ESCOLAS, COLÉGIOS E FACULDADES</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Não há nada mais desistimulande do que um ambiente sujo e mal higienizado!</span>

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

					<img class="pull-left" src="{{asset('assets/images/locais-de-aplicacao/icones/escola.png')}}" alt="Sanitização de Escolas, Colégios e Faculdades" />

					<div class="heading-title">
						<h2>Sanitização de Escolas e Faculdades</h2>
					</div>

          <p class="justify">O serviço de <span class="is-primary-color bold">sanitização de escolas, colégios e faculdades</span> é
            uma etapa essencial para garantir a limpeza, higiene e saúde dos alunos, professores e colaboradores no ambiente escolar.</p>
          <p class="justify">Essa medida é importante porque os alunos, professores e colaboradores passam grande parte de seu tempo em colégios,
            escolas e faculdades onde a quantidade de bactérias em salas de aula ocupadas pode ser até 50 vezes maior do que em salas vazias</p>
            <p class="justify">Assim,  a Sanitização de Escolas, Colégios e Faculdades é uma solução importantíssima na prevenção de
            doenças respiratórias e alergias, infecções, gripes e resfriados.</p>
        </div>

				<div class="row margin-top-60">

						<div class="col-sm-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>A Importância</h3>
								<p class="is-primary-color">Por que sanitizar meu ambiente escolar?</p>
							</div>

              <p class="size-14 justify">A sanitização de escolas é um cuidado muito importante porque os alunos, especialmente os
                mais novos, não têm as defesas do organismo completamente desenvolvidas, sendo mais suscetíveis a doenças
                transmitidas por ácaros, fungos, vírus e bactérias.</p>

              <p class="size-14 justify">Por isso, é de suma importância que os pais, professores e diretores se conscientizem sobre a
                importância de adotar a prática de controle microbiológico em escolas, colégios e faculdades para garantir
                um ambiente escolar mais saudável, limpo e seguro.<p>
						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>As Vantagens</h3>
								<p class="is-primary-color">Vantagens da Sanitização de Indústrias</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Aumento da produtividade e redução do absenteísmo dos alunos e professores;</li>
                <li><i class="fa fa-check text-info"></i> Eliminação do odor causado pela contaminação microbiológica;</li>
                <li><i class="fa fa-check text-info"></i> Prevenção de crises alérgicas e doenças infecciosas;</li>
                <li><i class="fa fa-check text-info"></i> Redução do risco de contaminação cruzada entre alunos;</li>
                <li><i class="fa fa-check text-info"></i> Diferencial competitivo para a instituição que coloca a saúde dos alunos como uma preocupação essencial;</li>
                <li><i class="fa fa-check text-info"></i> Ambiente limpo e livre de micro-organismos, como fungos e bactérias;</li>
                <li><i class="fa fa-check text-info"></i> Película protetora que previne a proliferação futura de material biológico infectante;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de agendamento da sanitização de indústria de acordo com os horários disponíveis do cliente;</li>
                <li><i class="fa fa-check text-info"></i> Não deixa resíduos, não mancha e não deixa cheiro;</li>
                <li><i class="fa fa-check text-info"></i> Aplicação relativamente rápida;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de utilização do ambiente duas horas após o término do procedimento de sanitização.</li>
              </ul>

						</div>

						<div class="col-sm-5">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>O Procedimento de Sanitização</h3>
								<p class="is-primary-color">Como é feita a Sanitização nas Escolas, Colégios e Faculdades?</p>
							</div>

              <p class="size-14 justify">O processo de sanitização de escolas, colégios e faculdades é realizado basicamente seguindo os procedimentos básicos
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
