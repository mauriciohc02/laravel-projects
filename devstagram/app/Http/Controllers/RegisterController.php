<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validaciones
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20', // Unico en la tabla users
            'email' => 'required|unique:users|email', // Unico en la tabla users
            'password' => 'required|confirmed|min:8' // Para password_confirmation
        ]);
    }
}
