<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /*public function post(Request $req){
      dd($req);
    }

    public function index(Request $req)
    {
        $dados = $req->all();
        if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['senha']])) {
            return redirect()->route('user.index');
        }

        return redirect()->route('login.index');
    }*/

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users = User::latest()->get();
        return view('users.show-users', compact('users'));
    }

    public function show(User $user){
        return view('users.show-single-user', compact('user'));
    }

}
