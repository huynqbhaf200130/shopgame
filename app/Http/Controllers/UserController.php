<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;

class UserController extends Controller
{
    public function userindex()
    {   $product=Product::all();
        return view('user.index',compact('product'));
    }
    public function adminindex()
    {
        $product=Product::all();
        return view('admin.index', compact('product'));
    }
    public function getLogin()
    {
        return view('user.pages.login');
    }
    public function postLogin(Request $request)
    {
        $arr = ['username' =>$request->username, 'password'=>$request->password];
        if(Auth::attempt($arr)){
            if(Auth::user()->role =='admin'){
                return redirect()->intended('admin/index');
            }
            if(Auth::user()->role =='customer'){
                return redirect()->intended('user/index');
            }
        $user = User::all();
        }
        else {
            return redirect()->intended('user/login');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('user/index');
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
        return view('admin.pages.user.listUser',compact("user"));
    }
    
    public function deleteUser($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect()->intended('admin/manageuser');
    }
}