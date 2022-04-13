<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('user.pages.login');
    }
    public function postLogin(Request $request)
    {
        $arr = ['username' =>$request->username, 'password'=>$request->password];
        if(Auth::attempt($arr)){
            return redirect()->intended('index');
        } else
        {
            echo "<script type='text/javascript'>alert('Mạnh ngu đần');</script>";
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('login');
    }
    public function getSignup()
    {
        return view('user.pages.signup');
    }
    public function postSignup(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->intended('user/login');
    }
    public function getAllUser(){
        $user=User::paginate(10);
        return view('listUser',compact("user"));
    }
}