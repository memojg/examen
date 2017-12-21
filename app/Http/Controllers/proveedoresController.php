<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\proveedor;
use App\usuarios_proyectos;
use DB;

class proveedoresController extends Controller
{
    public function registrar(){
    	return view('registrarProveedor');
    }

    public function guardar(Request $datos){
    	$proveedor= new proveedor;
    	$proveedor->nombre=$datos->input('nombre');
    	$proveedor->rfc=$datos->input('rfc');
    	$proveedor->estatus=$datos->input('estatus');
    	$proveedor->save();

    	return Redirect('/consultarProveedores');
    }

    public function consultar(){
    	$proveedor=proveedor::all();
    	return view('consultarProveedores', compact('proveedor'));
    }

    public function eliminar($id){
        proveedor::find($id)->delete();
        return Redirect('/consultarProveedores');
    }

    public function asignarUsuarios($id){
        $usuariosP=DB::table('usuarios AS u')
            ->join('usuarios_proveedor AS up', 'u.id', '=', 'up.id_usuario')
            ->where('up.id_proveedor', '=', $id)
            ->select('u.id', 'u.nombre', 'status', 'up.id AS upid')
            ->get();

        $lista=DB::table('usuarios_proveedor')
            ->where('id_proveedor', '=', $id)
            ->lists('id_usuario');

        $usuarios=DB::table('usuarios')
            ->whereNotIn('id', $lista)
            ->get();

        $proyecto=proyectos::find($id);

        return view('asignarUsuarios', compact('usuarios', 'usuariosP', 'proveedor'));
    }

    public function usuarioProveedor($id, Request $datos){
        $nuevo= new usuarios_proveedor;
        $nuevo->id_usuario=$datos->input('id_usu');
        $nuevo->id_proveedor=$id;
        $nuevo->save();

        return Redirect('/asignarUsuarios/'.$id);
    }

    public function quitarUsuario($id){
        $registro=usuarios_proyectos::find($id);
        $id_proyecto=$registro->id_proyecto;
        $registro->delete();

        return Redirect('/asignarUsuarios/'.$id_proyecto);
    }
}
















