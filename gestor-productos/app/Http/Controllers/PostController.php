<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct(){
        //Protegemos la URL
        //Al método index con el constructor le pasamos el parámetro de autentificación
        $this->middleware('auth');
    }
    public function index()
    {
        $products = DB::table('products')->get();
        
        return view("dashboard", ['products'=>$products]);
    }
}
