<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function __construct(){
        //Protegemos la URL
        //Al método index con el constructor le pasamos el parámetro de autentificación
        $this->middleware('auth');
    }
    public function index()
    {
        return view("register_products");
    }

    // Funcion que agrega producto en la DB
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'desc_short' => 'required',
            'desc_large'=>'required',
            'price_sell'=>'required',
            'price_purchase'=>'required',
            'stock'=>'required',
            'weight'=>'required'
        ]);
        // Se añade los campos del producto
        Products::create([
            'name' => $request->name,
            'desc_short' => $request->desc_short,
            'desc_large' => $request->desc_large,
            'price_sell' => $request->price_sell,
            'price_purchase' => $request->price_purchase,
            'stock' => $request->stock,
            'weight' => $request->weight
        ]);
        // Redirecciona
        return redirect()->route('post.index');

    }

    //Funcion que elimina producto
    public function delete(Request $request)
    {

        $deleteProducto = DB::table('products')->where('id', '=', $request->id)->delete();
        // Redirecciona
        return redirect()->route('post.index');

    }
}