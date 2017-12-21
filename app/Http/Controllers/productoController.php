<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\Http\Requests;
use DB;

class productoController extends Controller
{
    public function guardar(Request $request){
        $nombre=$request->input('nombre');
        $descripcion=$request->input('descripcion');
        $estatus=$request->input('estatus');
        


        //Guardar en BD

        $nuevo = new producto;
        $nuevo->nombre= $nombre;
        $nuevo->descripcion= $descripcion;
        $nuevo->estatus= $estatus;
        $nuevo->save();

        return Redirect('/consultarProducto');

    }

    public function consultar(){
        $producto=DB::table('producto')->paginate(5);
        return view('consultarProducto', compact('producto'));
    }

    public function eliminar($id){
        producto::find($id)->delete();
        return Redirect('/consultarProducto');
    }

    public function actualizar($id){
        $producto = producto::find($id);
        return view('actualizarProducto', compact('producto'));
    }

    public function actualizarProducto($id, Request $datos){
        $producto = producto::find($id);
        $producto->nombre = $datos->input('nombre');
        $producto->descripcion = $datos->input('descripcion');
        $producto->estatus = $datos->input('estatus');
        $producto->save();

        return Redirect('/consultarProducto');
    }

}
