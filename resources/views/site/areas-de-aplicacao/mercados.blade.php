@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes | Sanitização de mercados e supermercados</title>
  <meta name="keywords" content="sanitização de ambientes, sanitização de mercados, sanitização de supermercados" />
  <meta name="description" content="Texto sobre como é feita a sanitização em mercados e supermercados." />
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/locais-de-aplicacao/parallax/mercado.jpg")}}')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE MERCADOS E SUPERMERCADOS</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Deixe os fungos, ácaros e bactérias longe de suas mercadorias!</span>

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

					<img class="pull-left" src="{{asset('assets/images/locais-de-aplicacao/icones/mercado.png')}}" alt="Sanitização de Mercados e Supermercados" />

					<div class="heading-title">
						<h2>Sanitização de Mercados e Supermercados</h2>
					</div>

          <p class="justify">O serviço de <span class="is-primary-color bold">sanitização de mercados e supermercados</span> tem como finalidade
            garantir a durabilidade dos produtos bem como atender às normas de conservação e armazenamento destas mercadorias.</p>
          <p class="justify">Esta ação está diretamente relacionada à avaliação constante realizada pelo consumidor acerca das condições de armazenamento
            e limpeza dos produtos refletindo de forma importantíssima na escolha pelo melhor local para se realizar as compras.
          </p>
        </div>

				<div class="row margin-top-60">

						<div class="col-sm-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>A Importância</h3>
								<p class="is-primary-color">Por que sanitizar supermercados?</p>
							</div>

              <p class="size-14">Levando em conta a higiene e a durabilidade do estoque, que pode ser diminuída se as mercadorias
                não estiverem devidamente estocadas, os estabelecimentos devem sempre pensar na logística de sanitização e
                circulação do ambiente.</p>

              <p class="size-14">Outro fator importante são os diferentes produtos acondicionados no mesmo lugar, o que pede
                medidas preventivas diferentes, afinal as mercadorias não podem ser contaminadas por produtos químicos.</p>
						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>As Vantagens</h3>
								<p class="is-primary-color">Vantagens da Sanitização de Mercados e Supermercados</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Garantia da qualidade e sanidade das mercadorias armazenadas;</li>
                <li><i class="fa fa-check text-info"></i> Eliminação do odor causado pela contaminação microbiológica;</li>
                <li><i class="fa fa-check text-info"></i> Prevenção de crises alérgicas e doenças infecciosas;</li>
                <li><i class="fa fa-check text-info"></i> Redução do risco de contaminação de alimentos;</li>
                <li><i class="fa fa-check text-info"></i> Aumento significativo na duração dos produtos estocados;</li>
                <li><i class="fa fa-check text-info"></i> Diferencial competitivo para o mercado e supermercado que coloca a saúde das mercadorias como uma preocupação essencial;</li>
                <li><i class="fa fa-check text-info"></i> Supermercados limpos e livre de micro-organismos, como fungos e bactérias;</li>
                <li><i class="fa fa-check text-info"></i> Película protetora que previne a proliferação futura de material biológico infectante;</li>
                <li><i class="fa fa-check text-info"></i> Até 6 meses de proteção contra fungos e bactérias, de acordo com as condições do ambiente;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de agendamento da sanitização de contêineres de acordo com os horários disponíveis do cliente;</li>
                <li><i class="fa fa-check text-info"></i> Não deixa resíduos, não mancha e não deixa cheiro;</li>
                <li><i class="fa fa-check text-info"></i> Aplicação relativamente rápida;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de utilização do ambiente tratado duas horas após o término do procedimento de sanitização.</li>
              </ul>

						</div>

						<div class="col-sm-5">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>O Procedimento de Sanitização</h3>
								<p class="is-primary-color">Como é feita a Sanitização em Mercados e Supermercados?</p>
							</div>

              <p class="size-14 ">O processo de sanitização de mercados e supermercados é realizado basicamente seguindo os procedimentos básicos
                para sanitização em qualquer outro ambiente.</P>
              <p class="size-14 ">
                Primeiramente é realizada uma inspeção técnica e detalhada para avaliar o local. Em seguida, é realizada uma análise para definir
                as metodologias e produtos que serão utilizados para o caso concreto.
              </p>
              <p class="size-14 ">
                Após a análise e definição dos produtos e metodologias é feita a aplicação através de nebulização à frio
                (também conhecida com atomização ultra-baixo-volume - U.B.V) em todo o ambiente - paredes, teto, chão e superfícies
              de móveis, objetos e utencílios.</p>
              <p class="size-14">
                Esse produto adere às superfícies disponíveis e cria uma espécie de película protetora que impede o desenvolvimento
                destes microorganismos infecciosos no ambiente por até seis meses, podendo variar de acordo com o local e as
                condições da cada ambiente.
              </p>
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
