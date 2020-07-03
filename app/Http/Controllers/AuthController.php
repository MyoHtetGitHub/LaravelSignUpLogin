<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
class AuthController extends Controller
{
    public function create()
    {
        return view('Auth/register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' =>'required|confirmed',
        ]);
        User::create([
            'name' =>$request->get('name'),
            'email' =>$request->get('email'),
            'password'=>Hash::make($request->get('password'))
        ]);
        return redirect("user/login")->with('status', 'Great! You have Successfully Sign Up!');
    }
    public function loginForm()
    {
        return view('Auth/login');
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('user/login');
    }
    public function createLogin(Request $request)
    {
        $request->validate([
                    'email' => 'required',
                    'password' =>'required'
                 ]);

        $email   = $request->get('email');
        $password  = $request->get('password');
        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
              $request->session()->put('email',$email);
              return redirect('dashboard');
             
        }
    }

}
