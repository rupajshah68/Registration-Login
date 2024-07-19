<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $req){
        $cred=$req->only('email','password');
        if(Auth::attempt($cred)){
            $req->session()->regenerate();
            $id=Auth::id();
            $user=Users::where("id",$id)->first();
            $name=$user->name;
            return view('dashboard')->with("name",$name);
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
