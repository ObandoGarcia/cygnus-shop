<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Actions\Auth\RegisterUser;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUser $registerUser, RegisterUserRequest $request)
    {
        $user = $registerUser->execute($request->validated());
        Auth::login($user);

        return redirect()->route('public.index')->with('success','Inicio de sesion correcto!');
    }
}
