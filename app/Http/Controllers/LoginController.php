<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request) 
    {
        if($request->session()->get('errors')) 
            return redirect('error');

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials)) {
            $request->session()->flash('errors', ['Login failed']);
            return redirect('error');
        }

        return view('home');
    }
}
