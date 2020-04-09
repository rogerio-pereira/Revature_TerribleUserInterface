<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', compact($user));
    }

    public function update(UpdateRequest $request)
    {
        if($request->session()->get('errors')) 
            return redirect('error');

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        
        $user = User::find(Auth::user()->id);
        $user->update($data);
        
        return redirect()->back();
    }
}
