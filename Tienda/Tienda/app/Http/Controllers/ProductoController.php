<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Middleware\AdministradorMiddleware;
use App\Http\Requests\ProductoRequest;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    public function __construct(){
        
        $this->middleware('administrador')->except('showAll','showBrand');
        
    }
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
       $itemPage= $request->itemPage != null || $request->itemPage > 0 ? $request->itemPage: 15 ;
        //$orderBy = $this->getOrderBy($request->sortField);
        //$orderType = $this->getOrderType($request->sortValue);
        
        $productosQuery = DB::table('producto');
        
        $q = $request->q;
        if(  $q != ''){
            
            $productosQuery =$productosQuery->where('nombre','like','%'.$q.'%')
                                    ->orwhere('marca','like','%'.$q.'%')
                                    ->orwhere('compatibilidad','like','%'.$q.'%')
                                    ->orwhere('categoria','like','%'.$q.'%')
                                    ->orwhere('subcategoria','like','%'.$q.'%')
                                    ->orwhere('descripcion','like','%'.$q.'%')
                                    ->orwhere('precio','=',$q);
                               
        }
        
        
        if($request->category != ''){
            $productosQuery = $productosQuery->where('categoria','=',$request->category);
            if($request->subcategory != ''){
                $productosQuery = $productosQuery->where('subcategoria','=',str_replace("-", " ", $request->subcategory));
            }
        }
        
        $min = floatval($request->priceMin);
        $max = floatval($request->priceMax);
        
            
        if ($min > 0 || $max > 0) {
            $productosQuery = $productosQuery->where('precio', '>=', $min);
            if ($max>0) {
                $productosQuery = $productosQuery->where('precio', '<=', $max);
            }
        }
        
        if($request->brand != ''){
            $productosQuery = $productosQuery->where('marca', '=', $request->brand);
        }
    
       
        $order = $request->order;
        list($sortField, $sort) = explode('-', $order);
        
        if ($sortField == 'fecha') {
            $sortField = 'created_at';
        }
        
        $productos = $productosQuery->orderBy($sortField,$sort)
                                    ->paginate($itemPage);
        return view('admin.index',['productos'=>$productos,"itemPage"=>$itemPage,'order'=>$order]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = [
            'Neumaticos' => ['Neumaticos de verano', 'Neumaticos de invierno', 'Neumaticos mixtos'],
            'Frenos' => ['Discos de freno', 'Pastillas de freno', 'Freno de tambor'],
            'Amortiguacion' => ['Amortiguadores', 'Resortes helicoidales', 'Copela de amortiguador'],
            'Motor' => ['Kit de distribucion', 'Bomba de agua', 'Turbo'],
            'Carroceria' => ['Faro principal', 'Piloto trasero', 'Espejo retrovisor', 'Amortiguador de maletero'],
            'Aceites y liquidos' => ['Aceite de motor', 'Liquido de frenos'],
            'Escape' => ['Catalizador', 'Sonda lambda', 'Valvula egr']
        ];
        return  view('admin.create',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        $producto = new Producto($request->all());
              
        if($request->hasFile('rutaimg')) {
            $imagen = $request->file('rutaimg');
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destinoPath = public_path('/productos');
            $imagen->move($destinoPath, $nombre);
            $producto->rutaimg = $nombre;
        }
        try {
            $producto->save();
            return redirect('admin');
        } catch (\Exception $e) {
            return back()->withInput()->withError($e->getMessage());
        }
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('admin.show', ['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = [
            'Neumaticos' => ['Neumaticos de verano', 'Neumaticos de invierno', 'Neumaticos mixtos'],
            'Frenos' => ['Discos de freno', 'Pastillas de freno', 'Freno de tambor'],
            'Amortiguacion' => ['Amortiguadores', 'Resortes helicoidales', 'Copela de amortiguador'],
            'Motor' => ['Kit de distribucion', 'Bomba de agua', 'Turbo'],
            'Carroceria' => ['Faro principal', 'Piloto trasero', 'Espejo retrovisor', 'Amortiguador de maletero'],
            'Aceites y liquidos' => ['Aceite de motor', 'Liquido de frenos'],
            'Escape' => ['Catalizador', 'Sonda lambda', 'Valvula egr']
        ];
        $producto = Producto::find($id);
        return  view('admin.edit',['categorias'=>$categorias,'producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request, $id)
    {
        
         $producto = Producto::find($id);
         if($request->hasFile('rutaimg')) {
            $imagen = $request->file('rutaimg');
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destinoPath = public_path('/productos');
            $imagen->move($destinoPath, $nombre);
            $producto->rutaimg = $nombre;
        }
        try {
            $producto->update($request->all());
            return redirect('admin');
        } catch (Exception $e) {
            return back()->withInput()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $producto = Producto::find($id);
         $filePath = public_path('/productos/' . $producto->rutaimg);
        
        try {
            $producto->delete();
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            return redirect('admin');
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
    
    public function showAll(Request $request){
        
        $itemPage= $request->itemPage != null || $request->itemPage > 0 ? $request->itemPage: 15 ;
        //$orderBy = $this->getOrderBy($request->sortField);
        //$orderType = $this->getOrderType($request->sortValue);
        
        $productosQuery = DB::table('producto');
        
        $q = $request->q;
        if(  $q != ''){
            
            $productosQuery =$productosQuery->where('nombre','like','%'.$q.'%')
                                    ->orwhere('marca','like','%'.$q.'%')
                                    ->orwhere('compatibilidad','like','%'.$q.'%')
                                    ->orwhere('categoria','like','%'.$q.'%')
                                    ->orwhere('subcategoria','like','%'.$q.'%')
                                    ->orwhere('descripcion','like','%'.$q.'%')
                                    ->orwhere('precio','=',$q);
                               
        }
        
        
        if($request->category != 'Todos'){
            $productosQuery = $productosQuery->where('categoria','=',$request->category);
            if($request->subcategory != ''){
                $productosQuery = $productosQuery->where('subcategoria','=',str_replace("-", " ", $request->subcategory));
            }
        }
        
        $min = floatval($request->priceMin);
        $max = floatval($request->priceMax);
        
            
        if ($min > 0 || $max > 0) {
            $productosQuery = $productosQuery->where('precio', '>=', $min);
            if ($max>0) {
                $productosQuery = $productosQuery->where('precio', '<=', $max);
            }
        }
        
        if($request->brand != 'Todas'){
            $productosQuery = $productosQuery->where('marca', '=', $request->brand);
        }
        
        
        
        
        $productos = $productosQuery->orderBy($request->sortField,$request->sortValue)
                                    ->paginate($itemPage);
        
        
        return response()->json($productos);
    
        
    }
    
    
    public function showBrand(){
        
        $marcas = DB::table('producto')
                ->select('marca', DB::raw('count(*) as cantidad'))
                ->groupBy('marca')
                ->orderBy('cantidad', 'desc')
                ->take(10)
                ->get();
        
        return response()->json($marcas);
        
    }

    
    const ORDERBY = ['precio','popular','created_at','valoracion'];
    const ORDERTYPE = ['desc','asc'];
    
    
    private function getOrderBy($orderBy){
        $orderBy= $orderBy != null ? $orderBy : 'created_at'; 
        if(!in_array($orderBy,self::ORDERBY)){
            $orderBy='created_at';
        }
        return $orderBy;
    }
    
    
    
    
    private function getOrderType($orderType){
        $orderType= $orderType != null ? $orderType : 'asc'; 
        if(!in_array($orderType,self::ORDERTYPE)){
            $orderType='asc';
        }
        return $orderType;
    }
    
    
    
}
