<div id="header" class="sticky clearfix shadow-after-3">

  <!-- TOP NAV -->
  <header id="topNav">
    <div class="container">

      <!-- Mobile Menu Button -->
      <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Logo -->
      <a class="logo pull-left" href="{{route('inicial')}}" data-toggle="tooltip" data-placement="bottom" title="Página inicial">
        <img src="{{asset('assets/images/logo.png')}}" alt="ELITESAN - SANITIZAÇÃO DE AMBIENTES" />
      </a>

      <!--
        Top Nav

        AVAILABLE CLASSES:
        submenu-dark = dark sub menu
      -->
      <div class="navbar-collapse pull-right nav-main-collapse collapse">
        <nav class="nav-main">

          <!--
            NOTE

            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
            Direct Link Example:

            <li>
              <a href="#">HOME</a>
            </li>
          -->
          <ul id="topMain" class="nav nav-pills nav-main">
            <li class="{{ Nav::isRoute('sobre') }}"><!-- HOME -->
              <a href="{{route('sobre')}}">
                SOBRE
              </a>
            </li>
            <li  class="dropdown {{Nav::isRoute('sanitizacao')}} {{Nav::isRoute('sanitizacao.detalhes')}} {{Nav::isRoute('sanitizacao.beneficios')}} {{Nav::isRoute('sanitizacao.locais')}}"><!-- SANITIZAÇÃO DE AMBIENTES -->

              <a class="dropdown-toggle" href="{{route('sanitizacao')}}">
                SANITIZAÇÃO DE AMBIENTES
              </a>
              <ul class="dropdown-menu">
                <li class="{{ Nav::isRoute('sanitizacao.detalhes') }}">
                  <a href="{{route('sanitizacao.detalhes')}}">
                    O que é e como funciona?
                  </a>
                </li>
                <li class="{{ Nav::isRoute('sanitizacao.beneficios') }}">
                  <a href="{{route('sanitizacao.beneficios')}}">
                    BENEFÍCIOS E PROTEÇÕES
                  </a>
                </li>
                <li class="{{ Nav::isRoute('sanitizacao.locais') }}">
                  <a href="{{route('sanitizacao.locais')}}">
                    ONDE PODE SER APLICADO?
                  </a>
                </li>

              </ul>
            </li>
            <li class="dropdown mega-menu {{ Nav::isRoute($activeParam) }}"><!-- ORÇAMENTO RÁPIDO -->
              <a class="dropdown-toggle" href="#">
                ÁREAS DE APLICAÇÃO
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="row">
                    <div class="col-md-4th">
                      <ul class="list-unstyled">
                        <li class="{{ Nav::isRoute('industrias') }}"><a href="{{route('industrias')}}">INDÚSTRIAS</a></li>
                        <li class="{{ Nav::isRoute('escolas') }}"><a href="{{route('escolas')}}">ESCOLAS, COLÉGIOS E FACULDADES</a></li>
                        <li class="{{ Nav::isRoute('hoteis') }}"><a href="{{route('hoteis')}}">HOTÉIS</a></li>
                        <li class="{{ Nav::isRoute('clubes') }}"><a href="{{route('clubes')}}">CLUBES E SPAS</a></li>
                        <li class="{{ Nav::isRoute('cinemas') }}"><a href="{{route('cinemas')}}">CINEMAS, TEATROS E AUDITÓRIOS</a></li>
                        <li class="{{ Nav::isRoute('bancos') }}"><a href="{{route('bancos')}}">BANCOS</a></li>
                      </ul>
                    </div>

                    <div class="col-md-4th">
                      <ul class="list-unstyled">
                        <li class="{{ Nav::isRoute('transporte.cargas') }}"><a href="{{route('transporte.cargas')}}">TRANSPORTE DE CARGAS</a></li>
                        <li class="{{ Nav::isRoute('armazens') }}"><a href="{{route('armazens')}}">ARMAZÉNS E DEPÓSITOS</a></li>
                        <li class="{{ Nav::isRoute('containeres') }}"><a href="{{route('containeres')}}">CONTÊINERES</a></li>
                        <li class="{{ Nav::isRoute('mercados') }}"><a href="{{route('mercados')}}">MERCADOS E SUPERMERCADOS</a></li>
                        <li class="{{ Nav::isRoute('onibus') }}"><a href="{{route('onibus')}}">ÔNIBUS URBANOS E DE VIAGEM</a></li>
                        <li class="{{ Nav::isRoute('academias') }}"><a href="{{route('academias')}}">ACADEMIAS</a></li>
                      </ul>
                    </div>

                    <div class="col-md-4th">
                      <ul class="list-unstyled">
                        <li class="{{ Nav::isRoute('empresas') }}"><a href="{{route('empresas')}}">EMPRESAS</a></li>
                        <li class="{{ Nav::isRoute('hospitais') }}"><a href="{{route('hospitais')}}">HOSPITAIS E UNIDADES DE SAÚDE</a></li>
                        <li class="{{ Nav::isRoute('moteis') }}"><a href="{{route('moteis')}}">MOTÉIS</a></li>
                        <li class="{{ Nav::isRoute('condominios') }}"><a href="{{route('condominios')}}">CONDOMÍNIOS</a></li>
                        <li class="{{ Nav::isRoute('shoppings') }}"><a href="{{route('shoppings')}}">SHOPPINGS</a></li>
                        <li class="{{ Nav::isRoute('residencias') }}"><a href="{{route('residencias')}}">RESIDÊNCIAS</a></li>
                      </ul>
                    </div>

                  </div>
                </li>
              </ul>
            </li>
            <li class="{{ Nav::isRoute('orcamento') }}"><!-- ORÇAMENTO RÁPIDO -->
              <a href="{{route('orcamento')}}">
                ORÇAMENTO RÁPIDO
              </a>
            </li>
            <li class="{{ Nav::isRoute('contato') }}"><!-- CONTATO -->
              <a href="{{route('contato')}}">
                CONTATO
              </a>
            </li>
          </ul>

        </nav>
      </div>

    </div>
  </header>
  <!-- /Top Nav -->

</div>
