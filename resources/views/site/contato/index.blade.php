@extends('layouts.site.default')

{{-- Título e Meta Tagas --}}
@section('meta-title')
  <meta charset="utf-8" />
  <title>Elitesan | Sanitização de Ambientes - Contato</title>
  <meta name="keywords" content=" sanitização de ambientes, sobre a elitesan, sanitização de empresas, sanitização de escolas,
                                  sanitização de cinemas, sanitização de hospitais" />
  <meta name="description" content="" />
  <meta name="Author" content="Elitesan | Sanitização de Ambientes" />

  <!-- mobile settings -->
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
@endsection
{{-- /Título e Meta Tagas --}}

@section('custom-css')
  <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
@endsection

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
  <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('assets/images/parallax/contato.jpg')">
  	<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

  	<div class="container">

  		<h1 class="size-30 bold margin-bottom-25 wow bounceInLeft"><span class="bg-black-alpha-08 padding-10 text-white">ENTRE EM CONTATO COM A ELITESAN</span></h1>
  		<span class="wow fadeInLeftBig animation-visible animated font-lato size-18 weight-300 is-primary-color bg-white-alpha-08 padding-10" data-wow-delay="0.4s">Nós queremos ouvir o que você tem a dizer!</span>

  	</div>
  </section>
  <!-- /PAGE HEADER -->
@endsection

@section('content')

  <!-- -->
  <section class="padding-top-40 padding-bottom-0">
    <div class="container">

      <div class="row">

        <!-- FORM -->
        <div class="col-md-9 col-sm-9">

          <h3>Deixe-nos uma mensagem!</h3>

          <form action="{{route('contato.mensagem')}}" method="post">
            {{ csrf_field() }}
            <fieldset>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label for="unidade">Com qual unidade você deseja entrar em contato?</label>
                    <select class="form-control pointer" name="unidade">
                      <option value="">Selecione uma unidade...</option>
                      <option value="Londrina" @if (old('unidade') == "Londrina") {{ 'selected' }} @endif>Londrina - PR</option>
                      <option value="Maringá" @if (old('unidade') == "Maringá") {{ 'selected' }} @endif>Maringá - PR</option>
                    </select>
                    @if ($errors->has('unidade'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('unidade') }}
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-8">
                    <label for="nome">Nome ou Empresa</label>
                    <input type="text" value="{{ old('nome') }}" class="form-control" name="nome">
                    @if ($errors->has('nome'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('nome') }}
                        </span>
                    @endif
                  </div>
                  <div class="col-md-4">
                    <label for="contato">Contato</label>
                    <input type="text" value="{{ old('contato') }}" class="form-control" name="contato">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-8">
                    <label for="email">Email</label>
                    <input type="text" value="{{ old('email') }}" class="form-control" name="email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('email') }}
                        </span>
                    @endif
                  </div>
                  <div class="col-md-4">
                    <label for="telefone">Telefone</label>
                    <input type="text" value="{{ old('telefone') }}" class="form-control masked" name="telefone" id="telefone">
                    @if ($errors->has('telefone'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('telefone') }}
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-6">
                    <label for="endereco">Endereço</label>
                    <input type="text" value="{{ old('endereco') }}" class="form-control" name="endereco">
                    @if ($errors->has('endereco'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('endereco') }}
                        </span>
                    @endif
                  </div>
                  <div class="col-md-3">
                    <label for="numero">Número</label>
                    <input type="text" value="{{ old('numero') }}" class="form-control masked" data-format="9?99999999" name="numero">
                    @if ($errors->has('numero'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('numero') }}
                        </span>
                    @endif
                  </div>
                  <div class="col-md-3">
                    <label for="complemento">Complemento</label>
                    <input type="text" value="{{ old('complemento') }}" class="form-control" name="complemento">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-4">
                    <label for="estado">Estado</label>
                    <select class="form-control pointer" name="estado">
                      <option value="PR" @if (old('estado') == "PR") {{ 'selected' }} @endif>Paraná</option>
                      <option value="AC"  @if (old('estado') == "AC") {{ 'selected' }} @endif>Acre</option>
                    	<option value="AL" @if (old('estado') == "AL") {{ 'selected' }} @endif>Alagoas</option>
                    	<option value="AP" @if (old('estado') == "AP") {{ 'selected' }} @endif>Amapá</option>
                    	<option value="AM" @if (old('estado') == "AM") {{ 'selected' }} @endif>Amazonas</option>
                    	<option value="BA" @if (old('estado') == "BA") {{ 'selected' }} @endif>Bahia</option>
                    	<option value="CE" @if (old('estado') == "CE") {{ 'selected' }} @endif>Ceará</option>
                    	<option value="DF" @if (old('estado') == "DF") {{ 'selected' }} @endif>Distrito Federal</option>
                    	<option value="ES" @if (old('estado') == "ES") {{ 'selected' }} @endif>Espírito Santo</option>
                    	<option value="GO" @if (old('estado') == "GO") {{ 'selected' }} @endif>Goiás</option>
                    	<option value="MA" @if (old('estado') == "MA") {{ 'selected' }} @endif>Maranhão</option>
                    	<option value="MT" @if (old('estado') == "MT") {{ 'selected' }} @endif>Mato Grosso</option>
                    	<option value="MS" @if (old('estado') == "MS") {{ 'selected' }} @endif>Mato Grosso do Sul</option>
                    	<option value="MG" @if (old('estado') == "MG") {{ 'selected' }} @endif>Minas Gerais</option>
                    	<option value="PA" @if (old('estado') == "PA") {{ 'selected' }} @endif>Pará</option>
                    	<option value="PB" @if (old('estado') == "PB") {{ 'selected' }} @endif>Paraíba</option>
                    	<option value="PE" @if (old('estado') == "PE") {{ 'selected' }} @endif>Pernambuco</option>
                    	<option value="PI" @if (old('estado') == "PI") {{ 'selected' }} @endif>Piauí</option>
                    	<option value="RJ" @if (old('estado') == "RJ") {{ 'selected' }} @endif>Rio de Janeiro</option>
                    	<option value="RN" @if (old('estado') == "RN") {{ 'selected' }} @endif>Rio Grande do Norte</option>
                    	<option value="RS" @if (old('estado') == "RS") {{ 'selected' }} @endif>Rio Grande do Sul</option>
                    	<option value="RO" @if (old('estado') == "RO") {{ 'selected' }} @endif>Rondônia</option>
                    	<option value="RR" @if (old('estado') == "RR") {{ 'selected' }} @endif>Roraima</option>
                    	<option value="SC" @if (old('estado') == "SC") {{ 'selected' }} @endif>Santa Catarina</option>
                    	<option value="SP" @if (old('estado') == "SP") {{ 'selected' }} @endif>São Paulo</option>
                    	<option value="SE" @if (old('estado') == "SE") {{ 'selected' }} @endif>Sergipe</option>
                      <option value="TO" @if (old('estado') == "TO") {{ 'selected' }} @endif>Tocantins</option>
                    </select>
                    @if ($errors->has('estado'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('estado') }}
                        </span>
                    @endif
                  </div>
                  <div class="col-md-8">
                    <label for="cidade">Cidade</label>
                    <input type="text" value="{{ old('cidade') }}" class="form-control" name="cidade">
                    @if ($errors->has('cidade'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('cidade') }}
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-12">
                    <label for="mensagem">Mensagem</label>
                    <textarea maxlength="10000" rows="8" class="form-control" name="mensagem">{{ old('mensagem') }}</textarea>
                    @if ($errors->has('mensagem'))
                        <span class="help-block">
                            <i class="fa fa-exclamation-triangle"></i> {{ $errors->first('mensagem') }}
                        </span>
                    @endif
                  </div>
                </div>
              </div>

            </fieldset>

            <div class="row">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-block btn-info"><i class="fa fa-check"></i> ENVIAR MENSAGEM</button>
              </div>
            </div>
          </form>

        </div>
        <!-- /FORM -->


        <!-- INFO -->
        <div class="col-md-3 col-sm-3">

          <h2>Contatos</h2>

          <p class="block is-secondary-color">
            <span class="block"><strong><i class="fa fa-map-marker"></i> Matriz:</strong> Londrina - PR</span>
            <span class="block"><strong><i class="fa fa-phone"></i> Telefone:</strong> <a class="is-primary-color" href="tel:(43) 3336-0654">(43) 3336-0654</a></span>
            <span class="block"><strong><i class="fa fa-whatsapp"></i> Whatsapp:</strong> <a class="is-primary-color" href="tel:(43) 99136-2850">(43) 99136-2850</a></span>
            <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a class="is-primary-color" href="mailto:londrina@elitesan.com.br">londrina@elitesan.com.br</a></span>
          </p>

          <hr />

          <p class="block is-secondary-color">
            <span><strong><i class="fa fa-map-marker"></i> Filial:</strong> Maringá - PR</span>
            <span class="block"><strong><i class="fa fa-phone"></i> Telefone:</strong> <a class="is-primary-color" href="tel:(44) 3030-0655">(44) 3030-0655</a></span>
            <span class="block"><strong><i class="fa fa-whatsapp"></i> Whatsapp:</strong> <a class="is-primary-color" href="tel:(44) 99119-0655">(44) 99119-0655</a></span>
            <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a class="is-primary-color" href="mailto:maringa@elitesan.com.br">maringa@elitesan.com.br</a></span>
          </p>

          <hr />

          <h4 class="font300">Horário de Atendimento</h4>
          <p class="is-primary-color">
            <span class="block"><strong class="is-secondary-color">Segunda a Sexta:</strong> 09:00 às  18:00 horas</span>
            <span class="block"><strong class="is-secondary-color">Sábado:</strong> 09:00 às 13:00 horas</span>
            <span class="block"><strong class="is-secondary-color">Domingo:</strong> Fechado</span>
          </p>

        </div>
        <!-- /INFO -->

      </div>

    </div>
  </section>
  <!-- / -->
@endsection

@section('custom-js')
<script type="text/javascript">
  $("#telefone").focusout(function (event) {
      var target, phone, element;
      target = (event.currentTarget) ? event.currentTarget : event.srcElement;
      phone = target.value.replace(/\D/g, '');
      element = $(target);
      element.unmask();
      if(phone.length > 10) {
          element.mask("(99) 99999-999?9");
      } else {
          element.mask("(99) 9999-9999?9");
      }
  });
</script>

@include('flashy::message')

@endsection
