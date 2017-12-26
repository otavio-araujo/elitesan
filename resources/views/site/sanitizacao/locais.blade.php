@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Os benefícios da Sanitização de Ambientes</title>
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
  <!-- CALLOUT - LOCAIS DE APLICAÇÃOS -->
  <section class="callout-dark heading-title heading-arrow-bottom bg-secondary-alpha-1">
    <div class="container">

      <header class="text-center">
        <h1 class="weight-300 size-40">Onde Posso Aplicar a Sanitização da <strong>ELITESAN</strong>?</h1>
        <h2 class="weight-300 letter-spacing-1 size-14"><span>BASICAMENTE EM QUALQUER AMBIENTE QUE SE BUSQUE HIGIENE E SAÚDE!</span></h2>
      </header>

    </div>
  </section>
  <!-- /CALLOUT - OCAIS DE APLICAÇÃOS -->
@endsection

@section('content')
  
  @include('_includes.site.page-elements.locais-aplicacao')

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
@endsection

@section('custom-js')
  <!-- REVOLUTION SLIDER -->
  <script type="text/javascript" src="{{asset('assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>
@endsection
