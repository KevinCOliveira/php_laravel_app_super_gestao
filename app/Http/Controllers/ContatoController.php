<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;
class ContatoController extends Controller
{
    public function contato(Request $request) {
        
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // echo $request->input('nome');
        // echo '<br>';
        // echo $request->input('email');

        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // print_r($contato->getAttributes());
        // $contato->save();

        //  $contato = new SiteContato();
        //  $contato->create($request->all());
        // $contato->save();
        // $contato->save();

        // print_r($contato->getAttributes());

        $motivo_contatos = MotivoContato::all();  

        return view ('site.contato', ['titulo' => 'Contato (teste)','motivo_contatos' => $motivo_contatos]);
    }
    public function salvar(Request $request){
        // realizar a vailidação dos dados do fomulário recebidos no request
            $regras = [
                'nome' => 'required|min:3|max:40|unique:site_contatos', //nomes com no minimo 3 caracteres e de maximo 40.
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000'
            ];
            
            $feedback =  [
                
                'nome.min' =>  'O campo nome precisa ter no mínimo 3 caracteres',
                'nome.max' =>  'O campo nome precisa ter no máximo 40 caracteres',
                'nome.unique' =>  'O nome já esta em uso',
            
                'email.email' => 'O email informado não é válido',

                'mensagem.max' => 'A mensagem pode ter no máximo 200 caracteres',

                'required' => 'O campo :attribute deve ser preechido'
            ];

            $request->validate($regras, $feedback);
            
        SiteContato::create($request->all());
        return redirect()->route('site.index');

    }
}
