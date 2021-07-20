@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes</title>
  <meta name="keywords" content="HTML5,CSS3,Template" />
  <meta name="description" content="" />
  <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

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
  @include('_includes.site.page-elements.default-top-banner')
@endsection

@section('content')
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


  <!-- CALLOUT - o que é sanitização  -->
  <section class="callout-dark heading-title heading-arrow-bottom bg-secondary-alpha-1">
    <div class="container">

      <header class="text-center">
        <h1 class="weight-300 size-40">Como é Feita a Sanitização?</h1>
        <h2 class="weight-300 letter-spacing-1 size-14"><span>Conheça os 3S's - Simples, Segura e Sem Riscos!</span></h2>
      </header>

    </div>
  </section>
  <!-- /CALLOUT - o que é sanitização -->

  <!--  o que é sanitização -->
  <section class="noborder nopadding-bottom">
    <div class="container">

      <div class="row">

        <div class="col-md-5 col-sm-5">
          <a class="image-hover lightbox thumbnail" href="https://www.youtube.com/watch?v=oRVpMv3tufA" data-plugin-options='{"type":"iframe"}'>
            <span class="image-hover-icon image-hover-light"><!-- image-hover-light | image-hover-dark -->
              <i class="fa fa-youtube-square"><!-- video icon --></i>
            </span>
            <img class="img-responsive" src="assets/images/640x640/elitesan_video.jpg" alt="Conheça a Elitesan Sanitização de Ambientes">
          </a>
        </div>

        <div class="col-md-7 col-sm-7">


          <p>Sanitização de ambientes significa eliminar Vírus, Fungos, Ácaros e Bactérias, tornando o ambiente mais saudável e seguro para seus familiáres, colaboradores, clientes e demais pessoas.</p>
          <p class=" m-t-10-">A <span class="is-primary-color"><strong>elitesan</strong></span> desenvolve a sanitização de ambientes através de 3 etapas:</p>
          <div class="row  m-t-10-">
            <div class="col-md-12 m-t-10-">
              <ul class="list-unstyled list-icons">
                <li class="margin-bottom-10"><i class="fa fa-dot-circle-o is-secondary-color"></i> <strong class="is-primary-color">Inspeção técnica:</strong> é realizada por especialista de forma detalhada para verificar as características de cada ambiente a ser tratado.</li>
                <li class="margin-bottom-10"><i class="fa fa-dot-circle-o is-secondary-color"></i> <strong class="is-primary-color">Análise de métodos e produtos: </strong>após a coleta de dados da inspeção técnica será defido o método de aplicação e o produto que será utlizado na aplicação.</li>
              </ul>
            </div>
          </div>

          <a class="btn btn-teal btn-block btn-lg size-15 lightbox" href="https://www.youtube.com/watch?v=oRVpMv3tufA" data-plugin-options='{"type":"iframe"}'>ASSISTA AO VÍDEO EXPLICATIVO</a>

        </div>

      </div>

    </div>
  </section>
  <!-- / o que é sanitização -->


  <!-- CALLOUT - benefícios da Sanitização  -->
  <section class="callout-dark heading-title heading-arrow-bottom bg-black margin-top-60">
    <div class="container">

      <header class="text-center">
        <h1 class="weight-300 size-40">Quais os Benefícios da Sanitização?</h1>
        <h2 class="weight-300 letter-spacing-1 size-14"> <span>A PREVENÇÃO E PROTEÇÃO</span> </h2>
      </header>

    </div>
  </section>
  <!-- /CALLOUT - benefícios da Sanitização -->

  <!--  benefícios da Sanitização -->
  <div class="row">

    <div class="col-md-3 col-md-offset-1">

      <div class="box-icon box-icon-center box-icon-round text-center">
        <img src="assets/images/beneficios/bacteria-100x100.png" alt="Vírus" class="noborder">
        <h4 class="is-secondary-color">PROTEÇÃO DE MÓVEIS E OBJETOS</h4>
        <p>A <span class="is-primary-color">SANITIZAÇÃO</span> elimina os Ácaros, Fungos e Mau Cheiro protegendo os objetos, cortinas, tapetes, carpetes, roupas e móveis do ambiente.</p>
      </div>

    </div>

    <div class="col-md-4">

      <div class="box-icon box-icon-center box-icon-round text-center">
        <img src="assets/images/beneficios/virus-130x130.png" alt="Vírus" class="noborder">
        <h4 class="is-secondary-color">PREVENÇÃO CONTRA DOENÇAS</h4>
        <p>Um ambiente <span class="is-primary-color">SANITIZADO</span> está livre de bactérias, vírus, ácaros e fungos previnido o contágio por doenças como <span class="text-red text-italic">Gripe, Pneumonia e Tuberculose</span> e reduz as reações Alérgicas Respiratórias como <span class="text-red">Rinite, Asma, Bronquite e outros</span>.</p>
      </div>

    </div>

    <div class="col-md-3">

      <div class="box-icon box-icon-center box-icon-round text-center">
        <img src="assets/images/beneficios/acaro-100x100.png" alt="Vírus" class="noborder">
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


  <!-- CALLOUT - VANTAGES ELITESAN -->
  <section class="callout-dark heading-title heading-arrow-bottom bg-secondary-alpha-1">
    <div class="container">

      <header class="text-center">
        <h1 class="weight-300 size-40">Por Que Escolher a <strong>ELITESAN</strong>?</h1>
        <h2 class="weight-300 letter-spacing-1 size-14"><span>PROFISSIONALISMO, TECNOLOGIA DE PONTA, RESPONSABILIDADE AMBIENTAL</span></h2>
      </header>

    </div>
  </section>
  <!-- /CALLOUT - VANTAGES ELITESAN -->

  <!-- Benefícios -->
  <section class="nopadding container">

      <div class="row nopadding">

        <!-- item -->
        <div class="col-md-4">

          <div class="box-icon box-icon-center box-icon-transparent p-10 box-icon-large">
            <div class="box-icon-title">
              <i class="fa fa-medkit is-primary-box-icon"></i>
              <h2 class="is-secondary-color">Ação Preventiva</h2>
            </div>
            <p>Previne o contágio por diversas doenças, processos alérgicos, formação de bolores e odores e barra a contaminação e deterioração de alimentos.</p>
          </div>

        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-md-4">

          <div class="box-icon box-icon-center box-icon-transparent p-10 box-icon-large">
            <div class="box-icon-title">
              <i class="fa fa-bug is-primary-box-icon"></i>
              <h2 class="is-secondary-color">Ação Protetora</h2>
            </div>
            <p>Utilizando tecnologia de ponta de produtos de primera linha, a  <span class="is-primary-color">ELITESAN</span> proteje o ambientes e as superfícies das ameaças invisíveis do dia a dia.</p>
          </div>

        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-md-4">

          <div class="box-icon box-icon-center box-icon-transparent p-10 box-icon-large">
            <div class="box-icon-title">
              <i class="fa fa-shield is-primary-box-icon"></i>
              <h2 class="is-secondary-color">Ação Conservadora</h2>
            </div>
            <p>Protege e conserva superfícies de móveis, paredes, objetos e tecidos da ação dos fungos, evitando manchas e reduzindo custos com manutenção.</p>
          </div>

        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-md-4">

          <div class="box-icon box-icon-center box-icon-transparent p-10 box-icon-large">
            <div class="box-icon-title">
              <i class="fa fa-trash-o is-primary-box-icon"></i>
              <h2 class="is-secondary-color">Livre de Resíduos</h2>
            </div>
            <p>A SANITIZAÇÃO não deixa resíduos, não tem cheiro, não mancha superfícies e não causa qualquer tipo de alergia.</p>
          </div>

        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-md-4">

          <div class="box-icon box-icon-center box-icon-transparent p-10 box-icon-large">
            <div class="box-icon-title">
              <i class="fa fa-magic is-primary-box-icon"></i>
              <h2 class="is-secondary-color">Película Protetora</h2>
            </div>
            <p>Após a aplicação, os inimigos invisíveis são eliminados e forma-se uma película ativa protetora que ajuda na prevenção da proliferação destes microorganismos.</p>
          </div>

        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-md-4">

          <div class="box-icon box-icon-center box-icon-transparent p-10 box-icon-large">
            <div class="box-icon-title">
              <i class="fa fa-magic is-primary-box-icon"></i>
              <h2 class="is-secondary-color">Registros e Certificações</h2>
            </div>
            <p>Empresa certificada e registrada nos órgão competentes, dentre eles a ANVISA, IAP e IBAMA, utilizando apenas produtos registrados no Ministério da Saúde que possuem laudos de eficácia e toxidade aprovados.</p>
          </div>

        </div>
        <!-- /item -->

      </div>



    </section>
  <!-- /Benefícios -->

  <!-- CALLOUT - LOCAIS DE APLICAÇÃOS -->
  <section class="callout-dark heading-title heading-arrow-bottom bg-black">
    <div class="container">

      <header class="text-center">
        <h1 class="weight-300 size-40">Onde Posso Aplicar a Sanitização da <strong>ELITESAN</strong>?</h1>
        <h2 class="weight-300 letter-spacing-1 size-14"><span>BASICAMENTE EM QUALQUER AMBIENTE QUE SE BUSQUE HIGIENE E SAÚDE!</span></h2>
      </header>

    </div>
  </section>
  <!-- /CALLOUT - OCAIS DE APLICAÇÃOS -->

  @include('_includes.site.page-elements.locais-aplicacao')

  <!-- callout -->
  <div class="row padding-30 margin-top-30 bg-light-gray">
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

  <!-- CALLOUT - NOSSOS CLIENTES -->
  <section class="callout-dark heading-title heading-arrow-bottom bg-secondary-alpha-1">
    <div class="container">

      <header class="text-center">
        <h1 class="weight-300 size-40">Nossos Clientes</h1>
        <h2 class="weight-300 letter-spacing-1 size-14"><span>NÓS REALMENTE NOS PREOCUPAMOS COM NOSSOS CLIENTES</span></h2>
      </header>

    </div>
  </section>
  <!-- /CALLOUT - NOSSOS CLIENTE -->

  <!-- NOSSOS CLIENTE -->
  <section class="nopadding noborder">
    <!-- Clientes -->
    <!--
      controlls-over		= navigation buttons over the image
      buttons-autohide 	= navigation buttons visible on mouse hover only

      data-plugin-options:
        "singleItem": true
        "autoPlay": true (or ms. eg: 4000)
        "navigation": true
        "pagination": true
    -->
    <div class="text-center margin-top-30 margin-bottom-30">
      <div class="owl-carousel nomargin" data-plugin-options='{"items":6, "singleItem": false, "autoPlay": true}'>
        <div>
          <img class="img-responsive" src="assets/images/demo/brands/1.jpg" alt="">
        </div>
        <div>
          <img class="img-responsive" src="assets/images/demo/brands/2.jpg" alt="">
        </div>
        <div>
          <img class="img-responsive" src="assets/images/demo/brands/3.jpg" alt="">
        </div>
        <div>
          <img class="img-responsive" src="assets/images/demo/brands/4.jpg" alt="">
        </div>
        <div>
          <img class="img-responsive" src="assets/images/demo/brands/5.jpg" alt="">
        </div>
        <div>
          <img class="img-responsive" src="assets/images/demo/brands/6.jpg" alt="">
        </div>
        <div>
          <img class="img-responsive" src="assets/images/demo/brands/7.jpg" alt="">
        </div>
        <div>
          <img class="img-responsive" src="assets/images/demo/brands/8.jpg" alt="">
        </div>
      </div>
    </div>
    <!-- /Clientes -->
  </section>



  <!-- CALLOUT - DEPOIMENTOS -->
  <section class="callout-dark heading-title heading-arrow-bottom margin-top-30 bg-black">
    <div class="container">

      <header class="text-center">
        <h1 class="weight-300 size-40">Depoimentos</h1>
        <h2 class="weight-300 letter-spacing-1 size-14"><span>VEJA O QUE NOSSOS CLIENTES DIZEM</span></h2>
      </header>

    </div>
  </section>
  <!-- /CALLOUT - DEPOIMENTOS -->

  <!-- testimonials -->
  <section class="testimonial-bordered noborder padding-top-60 padding-bottom-30">

    <div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fadeUp"}'>
      <div class="testimonial">
        <figure>
          <img class="" src="assets/images/demo/people/300x300/11-min.jpg" alt="" />
        </figure>
        <div class="testimonial-content nopadding">
          <p class="lead">Muito satisfeito com a Sanitização!</p>
          <div class="row">
            <div class="col-md-2 col-md-offset-5">
              <a class="image-hover lightbox thumbnail" href="https://www.youtube.com/watch?v=oRVpMv3tufA" data-plugin-options='{"type":"iframe"}'>
                <span class="image-hover-icon image-hover-light"><!-- image-hover-light | image-hover-dark -->
                  <i class="fa fa-youtube-play text-red"><!-- video icon --></i>
                </span>
                <img class="img-responsive" src="assets/images/youtube-covers/elitesan_empresas.jpg" alt="Conheça a Elitesan Sanitização de Ambientes">
              </a>
            </div>
          </div>
          <cite>
            Professor Marvulle
            <span>Colégio Universitário - Londrina - PR</span>
          </cite>
        </div>
      </div>

      <div class="testimonial">
        <figure>
          <img class="rounded" src="assets/images/demo/people/300x300/12-min.jpg" alt="" />
        </figure>
        <div class="testimonial-content nopadding">
          <p class="lead">Quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
          <div class="row">
            <div class="col-md-2 col-md-offset-5">
              <a class="image-hover lightbox thumbnail" href="https://www.youtube.com/watch?v=oRVpMv3tufA" data-plugin-options='{"type":"iframe"}'>
                <span class="image-hover-icon image-hover-light"><!-- image-hover-light | image-hover-dark -->
                  <i class="fa fa-youtube-play text-red"><!-- video icon --></i>
                </span>
                <img class="img-responsive" src="assets/images/youtube-covers/elitesan_empresas.jpg" alt="Conheça a Elitesan Sanitização de Ambientes">
              </a>
            </div>
          </div>
          <cite>
            Melissa Doe
            <span>Company Ltd.</span>
          </cite>
        </div>
      </div>

      <div class="testimonial">
        <figure>
          <img class="rounded" src="assets/images/demo/people/300x300/d-min.jpg" alt="" />
        </figure>
        <div class="testimonial-content nopadding">
          <p class="lead">Deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum.</p>
          <div class="row">
            <div class="col-md-2 col-md-offset-5">
              <a class="image-hover lightbox thumbnail" href="https://www.youtube.com/watch?v=oRVpMv3tufA" data-plugin-options='{"type":"iframe"}'>
                <span class="image-hover-icon image-hover-light"><!-- image-hover-light | image-hover-dark -->
                  <i class="fa fa-youtube-play text-red"><!-- video icon --></i>
                </span>
                <img class="img-responsive" src="assets/images/youtube-covers/elitesan_empresas.jpg" alt="Conheça a Elitesan Sanitização de Ambientes">
              </a>
            </div>
          </div>
          <cite>
            John Doe
            <span>Company Ltd.</span>
          </cite>
        </div>
      </div>

      <div class="testimonial">
        <figure>
          <img class="rounded" src="assets/images/demo/people/300x300/c-min.jpg" alt="" />
        </figure>
        <div class="testimonial-content nopadding">
          <p class="lead">Fugit repellendus expedita excepturi iure perferendis provident quia eaque.</p>
          <div class="row">
            <div class="col-md-2 col-md-offset-5">
              <a class="image-hover lightbox thumbnail" href="https://www.youtube.com/watch?v=oRVpMv3tufA" data-plugin-options='{"type":"iframe"}'>
                <span class="image-hover-icon image-hover-light"><!-- image-hover-light | image-hover-dark -->
                  <i class="fa fa-youtube-play text-red"><!-- video icon --></i>
                </span>
                <img class="img-responsive" src="assets/images/youtube-covers/elitesan_empresas.jpg" alt="Conheça a Elitesan Sanitização de Ambientes">
              </a>
            </div>
          </div>
          <cite>
            Simina Doe
            <span>Company Ltd.</span>
          </cite>
        </div>
      </div>
    </div>

  </section>
  <!-- /testimonials -->

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
