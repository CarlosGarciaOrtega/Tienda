<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;
use App\Models\Pedido;
use Carbon\Carbon;
use App\Models\CarritoCompra;
use App\Models\User;

class PagoController extends Controller
{
   
    
    public function insertarPago(Request $request){
        
        $nuevaDireccion = array_key_exists('nueva',$request->direccionNueva);
        $guardarDireccion = array_key_exists('guardar',$request->direccionNueva);
        $idUsuario = auth()->user()->id;
        $pago = $request->metodoPago == 'pagado' ? 'Pagado':'No pagado';
        try {
            if($guardarDireccion && $nuevaDireccion){
                $this->guardarDireccion($request->direccionNueva);
            }
             $this->guardarPedido($pago,$request->total);
             $this->eliminarCarrito();
            return redirect('profile');
        } catch (Exception $e) {
            return back()->withInput()->withError($e->getMessage());
        }
        
        
        
    }
    
    public function pedidos(Request $request){
        
        $pedidos = User::find($request->idUsuario)->pedidos;
        return response()->json($pedidos);
    }
    
    
    private function guardarDireccion($direccion){
        $idUsuario = auth()->user()->id;
        Direccion::create([
                'direccion'=>$direccion['direccion'],
                'apartamento'=>$direccion['apartamento'],
                'ciudad'=>$direccion['ciudad'],
                'pais'=>$direccion['pais'],
                'cp'=>$direccion['cp'],
                'idusuario'=> $idUsuario,
                
                ]);
        
    }
    private function guardarPedido($pago,$total){
        $idUsuario = auth()->user()->id;
        Pedido::create([
                'fecha'=>  Carbon::now(),
                'estado'=>'procesando',
                'iduser'=>$idUsuario,
                'pago'=>$pago,
                'total'=>$total
                
            ]);
    }
    
    private function eliminarCarrito(){
        $idUsuario = auth()->user()->id;
        CarritoCompra::where('idUsuario', '=', $idUsuario)->delete();
    }
    
    
    
}
