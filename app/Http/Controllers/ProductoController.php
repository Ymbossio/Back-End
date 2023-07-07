<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        //obtenemos los registros de nuestra Base de Datos
        $producto=producto::all();
        //la respuesta que vamos a obtener de nuestra consulta va a ser en formato JSON
        return response()->json($producto);
    }

    public function store(Request $request)
    {
        //Creamos un nuevo producto
        $productos = new producto();
        //le indicamos los campos que vienen de la vista y los campos de la base de datos
        $productos->Descripcion = $request->Descripcion;
        $productos->Categoria = $request->Categoria;
        $productos->precio = $request->precio;
        $productos->estado =$request->estado; 
        //guardamos
        $productos->save();   
        //obtenemos la respuesta
        return response()->json();
    }


    public function show(producto $producto)
    {
        //devuleve un solo registro
        return response()->json($producto);
    }

    public function update(Request $request, producto $producto)
    {
        //Actualizamos el registro
        $producto->Descripcion = $request->Descripcion;
        $producto->Categoria = $request->Categoria;
        $producto->precio = $request->precio;
        $producto->estado =$request->estado; 
        $producto->save();
        return response()->json($producto);
    }

    public function destroy(producto $producto)
    {
        //Eliminacmos el registro
        $producto->delete();
        return response()->json();


    }
}
