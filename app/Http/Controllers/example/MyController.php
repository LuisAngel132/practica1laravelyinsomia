<?php

namespace App\Http\Controllers\example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\productos;
use App\personas;
use App\comentarios;



class MyController extends Controller
{
    public function personas(Request $request)
    {
        
        $persona = new Personas;

        $persona->nombre = $request->nombre;
        $persona->appaterno = $request->appaterno;
        $persona->apmaterno = $request->apmaterno;

        $persona->save();
        
        return response()->json([$persona,],201);
  
     //return response()->json(["url"=>url("/api/hola/{$request->variable}"),"data"=>$data,"request"=>$variable],201);
    }
    public function personasvista()
    {

        $vpersona=personas::all();
        return response()->json([$vpersona,],201);
    }
    
    public function productosvista($persona=null)
    {
        if($persona)
        {
            $vproducto=productos::where ('persona',$persona)->get();
            return response()->json([$vproducto,],201);
        }
        else
        {$vproducto=productos::all();
        return response()->json([$vproducto,],201);
        }
    }
   
    public function actualizar( Request $request,$idpersona){
        $persona = personas::find($idpersona);
       
$persona->nombre=$request->nombre;
$persona->appaterno=$request->appaterno;
$persona->apmaterno=$request->apmaterno;

$persona->save();
return response()->json([$persona,],201);
}
public function actualizarproducto( Request $request,$idproducto){
    $producto = productos::find($idproducto);
   
$producto->nombre_del_producto=$request->producto;
$producto->comentario=$request->comentario;
$producto->persona=$request->iddepersona;

$producto->save();
return response()->json([$producto,],201);
}
public function eliminarproducto( $idproducto){
    $producto = productos::find($idproducto);
    $producto->delete();
    return response()->json(["fue eliminado"],201);

}
public function eliminarpersona( $idpersona){
    $persona = personas::find($idpersona);

    $persona->delete();
    return response()->json(["fue eliminado"],201);

}
}



