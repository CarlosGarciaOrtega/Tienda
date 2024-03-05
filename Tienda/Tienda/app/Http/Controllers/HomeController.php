<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','showUser','showDireccion');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('viewsUser.home');
    }
    
    public function profile(){
        return view('viewsUser.profile');
    }
    
    public function carritoCompra(){
      
        return view('viewsUser.carrito');
        
        
    }
    
     public function wishlist(){
       
        return view('viewsUser.wishlist');
        
        
    }
    public function pago(){
       $productos = auth()->user()->productos;
       
       $total =0;
       foreach ($productos as $producto) {
           $total += $producto['pivot']['cantidad'] * $producto['precio'];
       }
       
       $direcciones = auth()->user()->direcciones;
    
       
        return view('viewsUser.pago',['total'=>$total,'direcciones'=>$direcciones]);
        
        
    }
    
    
    public function showUser($id){
       
        
        $usuario = User::find($id);
        return response()->json([
            'nombre'=>$usuario->name,
            'email'=>$usuario->email,]);
        
    }
   
    
     public function  showDireccion($id){
       
        
        $usuario = User::find($id);
        return response()->json($usuario->direcciones);
        
    }
    
    
}
