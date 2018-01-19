<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
          $to = "marionaldocabral@hotmail.com";
          $subject = "Teste envio de email";
          $message = "Este email é um teste";
          $additional_headers = null;
          $additional_parameters = null;
          $enviou = mail ($to , $subject , $message , $additional_headers , $additional_parameters);
          if($enviou){
            return view('home.index',
                  ['nome' => 'Fulano',
                   'itens' => ['laranja', 'maçã', 'pera']]);;
          }
          else{
            return redirect()->route('/');   
          }
    }
}
