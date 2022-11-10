<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContatoSite;

class ContatoController extends Controller

{
    public function contato(Request $request) {

      //$contato = new ContatoSite();
      //$contato->nome = $request->input('nome');
      //$contato->telefone = $request->input('telefone');
      //$contato->email = $request->input('email');
      //$contato->mensagem = $request->input('mensagem');

      //print_r($contato->getAttributes());

      //$contato->save();

      //$contato = new ContatoSite();
      //$contato->fill($request->all());
      //$contato->save();
      
      //print_r($contato->getAttributes());


      return view('site.contato', ['titulo' => 'Contato (Teste)']);

      }
      public function salvar(Request $request){
        
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'mensagem' => 'required|max:2000'
        ],

        [
            'nome.required' => 'Por gentileza informe o nome. ',
            'nome.min' => 'Por gentileza informe o nome com mais de 3 digitos. ',
            'nome.max' => 'OhOh! nome grande de mais, por gentileza informe seu nome com menos digitos (Pode abreviar😁). ',

            'telefone.required' => 'Por gentileza informe o telefone. ',
            'email.email' => 'Por gentileza, informe o email. ',
            'mensagem.required' => 'Por gentileza nos informe sua mensagem. '
        ]
    
    );
            ContatoSite::create($request->all());
            return redirect()->route('site.inicio');
      }
}