@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes | Sanitização de hotéis</title>
  <meta name="keywords" content="sanitização de ambientes, sanitização de hotéis" />
  <meta name="description" content="Texto sobre como é feita a sanitização em hotéis." />
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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('{{asset("assets/images/locais-de-aplicacao/parallax/hotel.jpg")}}')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">
      <h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">SANITIZAÇÃO DE HOTÉIS</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Seu hotel é limpo, porém, o que podem vir nas malas de seus hóspedes?</span>

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

					<img class="pull-left" src="{{asset('assets/images/locais-de-aplicacao/icones/hotel.png')}}" alt="Sanitização de Hotéis" />

					<div class="heading-title">
						<h2>Sanitização de Hotéis</h2>
					</div>

          <p class="justify">O serviço de <span class="is-primary-color bold">sanitização de hotéis</span> é
            uma etapa essencial para garantir a limpeza, higiene e saúde de seus hóspedes.</p>
          <p class="justify">É sabido que a indústria hoteleira está atrelada, no cenário atual mundial, a alta competitividade.
          Portanto, a fidelização de hóspedes se dá não somente ao conjunto conforto, bom atendimento e custo benefício, mas pela
          oferta de diferenciais.</p>
            <p class="justify">A Sanitização de Ambientes garante o diferencial de disponibilizar um ambiente livre de microorganismos
              patogênicos.</p>
        </div>

				<div class="row margin-top-60">

						<div class="col-sm-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>A Importância</h3>
								<p class="is-primary-color">Por que sanitizar meu hotel?</p>
							</div>

              <p class="size-14 justify">O modo de vida moderno trouxe também mudanças no perfil da população, entre elas no aspecto
                alérgico. Atualmente, cerca de 30% da população é alérgica, o que reflete as necessidades atuais dos hóspedes
                que frequentemente se hospedam em quartos de hotéis com condições apropriadas para a proliferação de fungos,
                bactérias, vírus e ácaros.</p>

              <p class="size-14 justify">Ambientes acarpetados, camas com diversos travesseiros, papéis de paredes, estofados e sistema
                de climatização são possíveis fontes desses microorganismos que insistem em se instalar, apesar da boa prática
                rotineira de limpeza.<p>
						</div>

            <div class="col-sm-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>As Vantagens</h3>
								<p class="is-primary-color">Vantagens da Sanitização de Indústrias</p>
							</div>

              <ul class="list-unstyled list-icons">
                <li><i class="fa fa-check text-info"></i> Eliminação do odor causado pela contaminação microbiológica;</li>
                <li><i class="fa fa-check text-info"></i> Prevenção de crises alérgicas e doenças infecciosas;</li>
                <li><i class="fa fa-check text-info"></i> Redução do risco de contaminação cruzada entre hóspedes;</li>
                <li><i class="fa fa-check text-info"></i> Diferencial competitivo para o hotel que coloca a saúde dos hóspedes como uma preocupação essencial;</li>
                <li><i class="fa fa-check text-info"></i> Ambiente limpo e livre de micro-organismos, como fungos e bactérias;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de agendamento da sanitização de indústria de acordo com os horários disponíveis do cliente;</li>
                <li><i class="fa fa-check text-info"></i> Não deixa resíduos, não mancha e não deixa cheiro;</li>
                <li><i class="fa fa-check text-info"></i> Aplicação relativamente rápida;</li>
                <li><i class="fa fa-check text-info"></i> Possibilidade de utilização do ambiente duas horas após o término do procedimento de sanitização.</li>
              </ul>

						</div>

						<div class="col-sm-5">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>O Procedimento de Sanitização</h3>
								<p class="is-primary-color">Como é feita a Sanitização nos Hotéis?</p>
							</div>

              <p class="size-14 justify">O processo de sanitização de hotéis é realizado basicamente seguindo os procedimentos básicos
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
