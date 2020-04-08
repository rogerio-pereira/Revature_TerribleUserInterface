<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        if($request->session()->get('errors')) 
            return redirect('error');

        $data = $request->all();
        $data['email_verified_at'] = Carbon::now()->toDateTimeString();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('/');
    }
}
