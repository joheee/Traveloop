<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }
    public function register(){
        return view('user.register');
    }
    public function logout(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('user.login');
    }
}
