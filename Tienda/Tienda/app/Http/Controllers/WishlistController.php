<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\User;

class WishlistController extends Controller
{
     public function show(Request $request){
            $user = User::find($request->id);
            $productos = $user->productosWishlist;
            
            foreach ($productos as $producto) {
                $producto['cantidad']=$producto['pivot']['cantidad'];
            }
            
            return  response()->json($productos);
        }
        
        
    public function eliminarProducto($idUsuario,$idProducto){
        
        $carrito = Wishlist::where('idUsuario', $idUsuario)
                                ->where('idProducto', $idProducto)
                                ->first();
        
        try {
           $carrito->delete();
            
          return response()->json(['deleted'=>'ok']);
        } catch (\Exception $e) {
             return response()->json(['deleted'=>'not',
                                        'error'=>$e
                                        ]);
        }
    }
    
    public function insertProducto(Request $request){
        
        $wishlist= new Wishlist($request->all());
        try {
            $wishlist->save();
             return response()->json(['inserted'=>'ok']);
        } catch (\Exception $e) {
             return response()->json(['inserted'=>'not',
                                        'error'=>$e
                                        ]);
        }
       
        
    }
}
