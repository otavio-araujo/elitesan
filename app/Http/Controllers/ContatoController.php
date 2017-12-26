<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Flashy;

class ContatoController extends Controller
{

    public function sendMessage(Request $request)
    {
      $request->validate([
          'nome' => 'required',
          'unidade' => 'required',
          'email' => 'required|email',
          'telefone' => 'required',
          'endereco' => 'required',
          'numero' => 'required',
          'estado' => 'required',
          'cidade' => 'required',
          'mensagem' => 'required',
      ]);

      $data = array(
        'unidade'     => $request->unidade,
        'nome'        => $request->nome,
        'contato'     => $request->contato,
        'telefone'    => $request->telefone,
        'endereco'    => $request->endereco,
        'email'       => $request->email,
        'numero'     => $request->numero,
        'complemento'     => $request->complemento,
        'estado'     => $request->estado,
        'cidade'     => $request->cidade,
        'mensagem'    => $request->mensagem,
        'data_envio'  => date('d/m/Y'),
        'hora_envio'  => date('h:i:sa')
      );

      Mail::send('emails.mensagem', $data, function ($message) use ($data)
          {

              //Add a subject
              $message->subject("Contato - WebSite - elitesan.com.br");
              $message->from('site@elitesan.com.br', 'Elitesan | Sanitização de Ambientes - Contato');
              if ($data['unidade'] == 'Londrina') {
                $message->to('londrina@elitesan.com.br');
              } elseif ($data['unidade'] == 'Maringá') {
                $message->to('maringa@elitesan.com.br');
              } else {
                // flash message to let user know it was successful
		            flashy()->error('Nenhma unidade para contato selecionada!');
                return view('site.contato.index');
              }
        });
        flashy()->success('Contato enviado com sucesso!');

        return redirect()->route('contato');


    }

    public function sendOrcamento(Request $request)
    {
      $request->validate([
          'nome' => 'required',
          'unidade' => 'required',
          'email' => 'required|email',
          'telefone' => 'required',
          'mensagem' => 'required',
      ]);

      $data = array(
        'unidade'     => $request->unidade,
        'nome'        => $request->nome,
        'contato'     => $request->contato,
        'telefone'    => $request->telefone,
        'email'       => $request->email,
        'mensagem'    => $request->mensagem,
        'data_envio'  => date('d/m/Y'),
        'hora_envio'  => date('h:i:sa')
      );

      Mail::send('emails.orcamento', $data, function ($message) use ($data)
          {

              //Add a subject
              $message->subject("Orçamento Rápido - WebSite - elitesan.com.br");
              $message->from('site@elitesan.com.br', 'Elitesan | Sanitização de Ambientes - Orçamento Rápido');
              if ($data['unidade'] == 'Londrina') {
                $message->to('londrina@elitesan.com.br');
              } elseif ($data['unidade'] == 'Maringá') {
                $message->to('maringa@elitesan.com.br');
              } else {
                // flash message to let user know it was successful
		            flashy()->error('Nenhma unidade para contato selecionada!');
                return view('site.contato.index');
              }
        });
        flashy()->success('Contato enviado com sucesso!');

        return redirect()->route('orcamento');


    }

}
