@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes | Sanitização de armazéns e depósitos</title>
  <meta name="keywords" content="sanitização de ambientes, sanitização de armazéns, sanitização de depósitos" />
  <meta name="description" content="Texto sobre como é feita a sanitização em armazéns e depósitos." />
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/locais-de-aplicacao/parallax/armazem.jpg")}}')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE ARMAZÉNS E DEPÓSITOS</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Não envie "presentes" invisíveis aos consumidores finais!</span>

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

					<img class="pull-left" src="{{asset('assets/images/locais-de-aplicacao/icones/armazem.png')}}" alt="Sanitização de Armazéns e Depósitos" />

					<div class="heading-title">
						<h2>Sanitização de Armazéns e Depósitos</h2>
					</div>

          <p class="justify">O serviço de <span class="is-primary-color bold">sanitização de trasnporte de cargas</span> tem como finalidade
            garantir a qualidade dos produtos armazenados nos armazéns e depóstios.</p>
          <p class="justify">Estes ambientes estocam grandes quantidades de variados produtos e de variados remetentes e por isso merecem
            uma atenção especial quanto a sua higiene.
          </p>
          <p class="justify">A não observação destes pontos importantes podem ocorrem em contaminação e perda destas mercadorias resultando
            em prejuízos em grande escala.
          </p>

          <p class="justify">Pensando nisso a <span class="is-primary-color bold">Elitesan</span> desenvolve o serviço de Sanitização de Armazéns e Depósitos utilizando tecnologia de ponta e
            produtos que não agridem o meio ambiente e não oferecem riscos de contaminação às mercadorias armazenadas.
          </p>
        </div>

				<div class="row margin-top-60">

						<div class="col-sm-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>A Importância</h3>
								<p class="is-primary-color">Por que sanitizar armazéns e depósitos?</p>
							</div>

              <p class="size-14 justify">Devido a grande concetração de mercadorias provenientes de vários remententes e de diferentes naturezas,
                os armazéns e depósitos ficam vulneráveis à proliferação de fungos, ácaros, vírus e bactérias.</p>

              <p class="size-14 justify">Estes microorganismos podem causar danos irreparáveis aos produtos armazenados e até a necessidade de eliminação de mercadorias.</p>

						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>As Vantagens</h3>
								<p class="is-primary-color">Vantagens da Sanitização de Armazéns e Depósitos</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Garantia da qualidade e sanidade das mercadorias armazenadas;</li>
                <li><i class="fa fa-check text-info"></i> Eliminação do odor causado pela contaminação microbiológica;</li>
                <li><i class="fa fa-check text-info"></i> Prevenção de crises alérgicas e doenças infecciosas;</li>
                <li><i class="fa fa-check text-info"></i> Redução do risco de contaminação cruzada entre cargas;</li>
                <li><i class="fa fa-check text-info"></i> Diferencial competitivo para a unidade armazenadora que coloca a saúde das mercadorias como uma preocupação essencial;</li>
                <li><i class="fa fa-check text-info"></i> Armazéns e depósitos limpos e livre de micro-organismos, como fungos e bactérias;</li>
                <li><i class="fa fa-check text-info"></i> Película protetora que previne a proliferação futura de material biológico infectante;</li>
                <li><i class="fa fa-check text-info"></i> Até 6 meses de proteção contra fungos e bactérias, de acordo com as condições do ambiente;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de agendamento da sanitização de armazéns e depósitos de acordo com os horários disponíveis do cliente;</li>
                <li><i class="fa fa-check text-info"></i> Não deixa resíduos, não mancha e não deixa cheiro;</li>
                <li><i class="fa fa-check text-info"></i> Aplicação relativamente rápida;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de utilização do ambiente duas horas após o término do procedimento de sanitização.</li>
              </ul>

						</div>

						<div class="col-sm-5">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>O Procedimento de Sanitização</h3>
								<p class="is-primary-color">Como é feita a Sanitização em Armazéns e Depósitos?</p>
							</div>

              <p class="size-14 justify">O processo de sanitização de armazéns de depósitos é realizado basicamente seguindo os procedimentos básicos
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
