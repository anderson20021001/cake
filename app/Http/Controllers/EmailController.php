<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class EmailController extends Controller

 {

    public function create(){
        return view('email.create');
    }

    public function store(Request $request){

       //dd($request->all());

       $email = new Email;
       $email->para     = $request->para;
       $email->assunto  = $request->assunto;
       $email->conteudo = $request->conteudo;
       $email->save();

       Mail::to($email->para)->send(new SendMail($email));



    }
    
}
