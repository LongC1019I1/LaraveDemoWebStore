<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('login.login');
    }

    public function login( Request $request) {
        $username = $request->username;
        $password = $request->password;

        if ($username == "admin" && $password=="admin"){
            return redirect('/trang-chu');
        }
        return back();
    }
}
