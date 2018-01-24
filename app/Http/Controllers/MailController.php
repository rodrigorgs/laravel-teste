<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailTest;

class MailController extends Controller
{
    public function index(){
        return view('welcome');
    }
    //
    public function enviarEmail(){
      Mail::to('marionaldocabral@gmail.com')->send(new mailTest());
      return 'OK';
    }
}
