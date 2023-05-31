<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        //dd($request->username);
        //Modificamos el Request para que no se repitan los "username"
        //$request->request->add(['username'=>Str::slug($request->username)]); 
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password2' => 'required',
        ]);

        //Invocar el modelo User para crear el registro
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);
        
        // Autentificar usuario
        auth()->attempt($request->only('email', 'password'));

        // Redirecciona
        return redirect()->route('post.index');
    }
}