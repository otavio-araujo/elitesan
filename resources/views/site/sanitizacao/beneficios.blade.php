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
  <!-- CALLOUT - benefícios da Sanitização  -->
  <section class="callout-dark heading-title heading-arrow-bottom bg-secondary-alpha-1">
    <div class="container">

      <header class="text-center">
        <h1 class="weight-300 size-40">Quais os Benefícios da Sanitização?</h1>
        <h2 class="weight-300 letter-spacing-1 size-14"> <span>A PREVENÇÃO E PROTEÇÃO</span> </h2>
      </header>

    </div>
  </section>
  <!-- /CALLOUT - benefícios da Sanitização -->
@endsection

@section('content')
  <!--  benefícios da Sanitização -->
  <div class="row">

    <div class="col-md-3 col-md-offset-1">

      <div class="box-icon box-icon-center box-icon-round text-center">
        <img src="{{asset('assets/images/beneficios/bacteria-100x100.png')}}" alt="Vírus" class="noborder">
        <h4 class="is-secondary-color">PROTEÇÃO DE MÓVEIS E OBJETOS</h4>
        <p>A <span class="is-primary-color">SANITIZAÇÃO</span> elimina os Ácaros, Fungos e Mau Cheiro protegendo os objetos, cortinas, tapetes, carpetes, roupas e móveis do ambiente.</p>
      </div>

    </div>

    <div class="col-md-4">

      <div class="box-icon box-icon-center box-icon-round text-center">
        <img src="{{asset('assets/images/beneficios/virus-130x130.png')}}" alt="Vírus" class="noborder">
        <h4 class="is-secondary-color">PREVENÇÃO CONTRA DOENÇAS</h4>
        <p>Um ambiente <span class="is-primary-color">SANITIZADO</span> está livre de bactérias, vírus, ácaros e fungos previnido o contágio por doenças como <span class="text-red text-italic">Gripe, Pneumonia e Tuberculose</span> e reduz as reações Alérgicas Respiratórias como <span class="text-red">Rinite, Asma, Bronquite e outros</span>.</p>
      </div>

    </div>

    <div class="col-md-3">

      <div class="box-icon box-icon-center box-icon-round text-center">
        <img src="{{asset('assets/images/beneficios/acaro-100x100.png')}}" alt="Vírus" class="noborder">
        <h4 class="is-secondary-color">PROTEÇÃO DE ALIMENTOS</h4>
        <p>A <span class="is-primary-color">SANITIZAÇÃO</span> elimina os microorganismos e ajuda a proteger e evitar a contaminação dos alimentos garantindo a saúde e higiene do ambiente tratado.</p>
      </div>

    </div>

  </div>
  <!-- / benefícios da Sanitização -->

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
