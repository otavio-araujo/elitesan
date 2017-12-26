<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Página inicial
Route::get('/', function () {
    return view('site.index')->withActiveParam('');
})->name('inicial');

// Sobre a ELITESAN
Route::get('/sobre-a-elitesan', function () {
    return view('site.sobre.index')->withActiveParam('');
})->name('sobre');

// Contato
Route::get('/fale-com-a-elitesan', function () {
    return view('site.contato.index')->withActiveParam('');
})->name('contato');

Route::post('/fale-com-a-elitesan/contactSendMessage', 'ContatoController@sendMessage')->name('contato.mensagem');

// Contato
Route::get('/orcamento-rapido-elitesan', function () {
    return view('site.contato.orcamento')->withActiveParam('');
})->name('orcamento');

Route::post('/fale-com-a-elitesan/orcamentoSendMessage', 'ContatoController@sendOrcamento')->name('contato.orcamento');

// Grupo de rotas - Sanitização de Ambientes e Locais de Aplicação
Route::prefix('sanitizacao-de-ambientes')->group(function () {
  Route::get('/', function () {
      return view('site.sanitizacao.index')->withActiveParam('');
  })->name('sanitizacao');

  Route::get('/o-que-e-sanitizacao-de-ambientes-e-como-funciona', function () {
      return view('site.sanitizacao.index')->withActiveParam('');
  })->name('sanitizacao.detalhes');

  Route::get('/beneficios-da-sanitizacao-de-ambientes', function () {
      return view('site.sanitizacao.beneficios')->withActiveParam('');
  })->name('sanitizacao.beneficios');

  Route::get('/onde-pode-ser-aplicada-a-sanitizacao-de-ambientes', function () {
      return view('site.sanitizacao.locais')->withActiveParam('');
  })->name('sanitizacao.locais');


  // Locais de aplicação
  Route::get('/sanitizacao-de-industrias', function () {
      return view('site.areas-de-aplicacao.industrias')->withActiveParam('industrias');
  })->name('industrias');

  Route::get('/sanitizacao-de-escolas-e-faculdades', function () {
      return view('site.areas-de-aplicacao.escolas')->withActiveParam('escolas');
  })->name('escolas');

  Route::get('/sanitizacao-de-hoteis', function () {
      return view('site.areas-de-aplicacao.hoteis')->withActiveParam('hoteis');
  })->name('hoteis');

  Route::get('/sanitizacao-de-clubes-e-spas', function () {
      return view('site.areas-de-aplicacao.clubes')->withActiveParam('clubes');
  })->name('clubes');

  Route::get('/sanitizacao-de-cinemas-e-teatros', function () {
      return view('site.areas-de-aplicacao.cinemas')->withActiveParam('cinemas');
  })->name('cinemas');

  Route::get('/sanitizacao-de-bancos', function () {
      return view('site.areas-de-aplicacao.bancos')->withActiveParam('bancos');
  })->name('bancos');

  Route::get('/sanitizacao-de-transporte-de-cargas', function () {
      return view('site.areas-de-aplicacao.transporte-cargas')->withActiveParam('transporte.cargas');
  })->name('transporte.cargas');

  Route::get('/sanitizacao-de-armazens-e-depositos', function () {
      return view('site.areas-de-aplicacao.armazens')->withActiveParam('armazens');
  })->name('armazens');

  Route::get('/sanitizacao-de-containeres', function () {
      return view('site.areas-de-aplicacao.containeres')->withActiveParam('containeres');
  })->name('containeres');

  Route::get('/sanitizacao-de-mercados-e-supermercados', function () {
      return view('site.areas-de-aplicacao.mercados')->withActiveParam('mercados');
  })->name('mercados');

  Route::get('/sanitizacao-de-onibus', function () {
      return view('site.areas-de-aplicacao.onibus')->withActiveParam('onibus');
  })->name('onibus');

  Route::get('/sanitizacao-de-academias', function () {
      return view('site.areas-de-aplicacao.academias')->withActiveParam('academias');
  })->name('academias');

  Route::get('/sanitizacao-de-empresas', function () {
      return view('site.areas-de-aplicacao.empresas')->withActiveParam('empresas');
  })->name('empresas');

  Route::get('/sanitizacao-de-hospitais-e-unidades-de-saude', function () {
      return view('site.areas-de-aplicacao.hospitais')->withActiveParam('hospitais');
  })->name('hospitais');

  Route::get('/sanitizacao-de-moteis', function () {
      return view('site.areas-de-aplicacao.moteis')->withActiveParam('moteis');
  })->name('moteis');

  Route::get('/sanitizacao-de-condominios', function () {
      return view('site.areas-de-aplicacao.condominios')->withActiveParam('condominios');
  })->name('condominios');

  Route::get('/sanitizacao-de-shoppings', function () {
      return view('site.areas-de-aplicacao.shoppings')->withActiveParam('shoppings');
  })->name('shoppings');

  Route::get('/sanitizacao-de-residencias', function () {
      return view('site.areas-de-aplicacao.residencias')->withActiveParam('residencias');
  })->name('residencias');


});
