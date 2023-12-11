<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    function index(){
        return view('login');
    }
    public function loginl(Request $req){
    $user =  User::where(['email' => $req->email])->first();
    if(!$user || !Hash::check($req->password,$user->password)){
       //alert("PLEASE CHECK YOUR EMAIL AND PASSWORD");
       return redirect('/login');
    }
    else{
        $req->session()->put('user',$user);
        return redirect('/');
    }
    }

    function registerUser(){
        return view('register');
    }

    function registerData(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $users = new User;
        $users->name=$req->name;
        $users->email=$req->email;
        $users->password=Hash::make($req->password);
        $users->save();

        return redirect('/login');
    }
}
