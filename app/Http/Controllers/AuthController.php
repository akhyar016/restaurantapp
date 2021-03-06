<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;

class AuthController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login(UserRequest $request)
    {
    	if(Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ])){
            //return 'hello';
            $user = User::where('email', $request->email)->first();
            return redirect()->route('dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
