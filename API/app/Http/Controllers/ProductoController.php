<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{
    public function ObtenerProducto($id){

        //Buscar Base datos
        $producto = Producto::find($id);

        return response()->json($producto);
    }

    public function CrearProducto(Request $request){

        $json = $request->all();

        $producto = new Producto;
        $producto -> Codigo = $json['Codigo'];
        $producto -> Nombre = $json['Nombre'];
        $producto -> Descripcion = $json['Descripcion'];
        $producto -> Estado = $json['Estado'];
        $producto -> FechaIngreso = $json['FechaIngreso'];
        $producto -> AfectoIgv = $json['AfectoIgv'];
        $producto -> Precio = $json['Precio'];
        $producto -> Ruc = $json['Ruc'];
        $producto -> Proveedor = $json['Proveedor'];
        $producto -> Categoria = $json['Categoria'];

        $producto -> save();
        

        return "El producto con el id : " . $producto->id . " ha sido creado ";
    }

    public function ModificarProducto(Request $request, $id){

        $producto = Producto::find($id);

        $json = $request->all();

        
        $producto -> Codigo = $json['Codigo'];
        $producto -> Nombre = $json['Nombre'];
        $producto -> Descripcion = $json['Descripcion'];
        $producto -> Estado = $json['Estado'];
        $producto -> FechaIngreso = $json['FechaIngreso'];
        $producto -> AfectoIgv = $json['AfectoIgv'];
        $producto -> Precio = $json['Precio'];
        $producto -> Ruc = $json['Ruc'];
        $producto -> Proveedor = $json['Proveedor'];
        $producto -> Categoria = $json['Categoria'];

        $producto -> save();

        return "El producto con el id : " . $id ." Codigo ".$producto->Codigo." ha sido modificado ";
    }

    public function EliminarProducto($id) {

        $producto = Producto::find($id);
        $producto -> delete();

        return "El producto con el id : " . $id . " ha sido eliminado ";
    }
}
