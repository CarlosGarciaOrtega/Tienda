<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CarritoCompra;
class CarritoController extends Controller
{
    public function show(Request $request){
        $user = User::find($request->id);
        $productosTotales = $user->productos;
        
        foreach ($productosTotales as $producto) {
            $producto['cantidad']=$producto['pivot']['cantidad'];
        }
        
        return  response()->json($productosTotales);
    }
    
    public function insertProducto(Request $request){
        
        $carrito= new CarritoCompra($request->all());
        try {
            $carrito->save();
             return response()->json(['inserted'=>'ok']);
        } catch (\Exception $e) {
             return response()->json(['inserted'=>'not',
                                        'error'=>$e
                                        ]);
        }
       
        
    }
    public function actualizarProducto(Request $request ,$idUsuario,$idProducto){
         $carrito = CarritoCompra::where('idUsuario', $idUsuario)
                                ->where('idProducto', $idProducto)
                                ->first();
        $carrito->cantidad = $request->cantidad;
        
         try {
            $carrito->save();
             return response()->json(['actualizado'=>'ok']);
        } catch (\Exception $e) {
             return response()->json(['actualizado'=>'not',
                                        'error'=>$e
                                        ]);
        }
    }
    
    public function eliminarProducto($idUsuario,$idProducto){
        
        $carrito = CarritoCompra::where('idUsuario', $idUsuario)
                                ->where('idProducto', $idProducto)
                                ->first();
        
        try {
           $carrito->delete();
            
          return response()->json(['deleted'=>[$idUsuario,$idProducto]]);
        } catch (\Exception $e) {
             return response()->json(['deleted'=>'not',
                                        'error'=>$e
                                        ]);
        }
    }
    
    public function vaciarCarrito($idUsuario){
        
                $carrito = CarritoCompra::where('idUsuario', $idUsuario)->get();
               
                try {
                    
                    foreach ($carrito as $productos) {
                        $productos->delete();
                    }
                    return response()->json(['deleted'=>'OK']);
                } catch (\Exception $e) {
                    // Aquí puedes manejar el error si es necesario
                }
                
                return response()->json(['deleted'=>'not']);
            }
        
    
    
}
