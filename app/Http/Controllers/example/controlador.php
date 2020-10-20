<?php

namespace App\Http\Controllers\example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\productos;

class controlador extends Controller
{
    public function producto(Request $request)
    {
        $producto = new Productos;

        $producto->nombre_del_producto = $request->producto;
        $producto->comentario = $request->comentario;
        $producto->persona = $request->iddepersona;

        $producto->save();
        return response()->json([$producto,],201);


    }
}