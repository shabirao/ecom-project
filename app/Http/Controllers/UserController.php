<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     function index()
     {
         return view('login');
     }
    function Login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        If( !$user || !Hash::check($req->password, $user->password))
        {
            return "username or password does not match";
        }
        else
        {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}
