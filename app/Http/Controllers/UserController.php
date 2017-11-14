<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function post(Request $req){
      dd($req);
    }

    public function index(Request $req){
      $dados = $req->all();
      if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
         return redirect()->route('user.index');
       }

       return redirect()->route('login.index');
}
