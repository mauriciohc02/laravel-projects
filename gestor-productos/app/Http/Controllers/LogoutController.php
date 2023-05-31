<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    // Funcion que cierra sesion
    public function store(){
        auth()->logout();
        return redirect()->route('login');
    }
}
