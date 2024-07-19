<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $req)
    {
        if ($req->validate(
            [
                'name' => 'required|alpha',
                'email' => 'required|email|unique:users',
                'password' => 'required|size:8'
            ]
        )) {
                $hash=password_hash($req->password,PASSWORD_DEFAULT);
                Users::create(
                    [
                        'name' => $req->name,
                        'email' => $req->email,
                        'password' => $hash
                    ]
                );
                return view('reg_success');
        }
    }
}
