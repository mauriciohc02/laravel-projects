<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    // Funcion que validar el form
    public function store(Request $request)
    {
        // Verifica si son requeridos
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Condiciona si las credenciales son correctas
        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('mensaje','Parametros incorrectos');
        }
        // Redirecciona
        return redirect()->route('post.index');
    }
}