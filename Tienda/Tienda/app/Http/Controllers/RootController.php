<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RootController extends Controller
{
    function index(){
        
        $usuarios = DB::table('users')->where('rol','=','administrador')->orwhere('rol','=','root')->get();
        return response()->json($usuarios);
    }
    function store(Request $request){
        
        $user = new User($request->all());
        $user->password=Hash::make($request->password);
        try {
            $user->save();
             return response()->json(['inserted'=>'ok']);
        } catch (\Exception $e) {
             return response()->json(['inserted'=>'not',
                                        'error'=>$e
                                        ]);
        }
       
        
    }
}
