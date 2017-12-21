<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use App\Http\Requests;
use DB;

class usuariosController extends Controller
{
    public function guardar(Request $request){
        $nombre=$request->input('nombre');
        $apellido=$request->input('apellido');
        $f_nacimiento=$request->input('f_nacimiento');
        $correo=$request->input('correo');
        $status=$request->input('status');


        //Guardar en BD

        $nuevo = new usuarios;
        $nuevo->nombre= $nombre;
        $nuevo->apellido= $apellido;
        $nuevo->f_nacimiento= $f_nacimiento;
        $nuevo->correo=$correo;
        $nuevo->status=$status;
        $nuevo->save();

        return Redirect('/consultarUsuarios');

    }

    public function consultar(){
        $usuarios=DB::table('usuarios')->paginate(5);
        return view('consultarUsuarios', compact('usuarios'));
    }

    public function eliminar($id){
        usuarios::find($id)->delete();
        return Redirect('/consultarUsuarios');
    }

    public function actualizar($id){
        $user = usuarios::find($id);
        return view('actualizarUsuarios', compact('user'));
    }

    public function actualizarUsuario($id, Request $datos){
        $usuario = usuarios::find($id);
        $usuario->nombre = $datos->input('nombre');
        $usuario->apellido = $datos->input('apellido');
        $usuario->f_nacimiento= $datos->input('f_nacimiento');
        $usuario->correo = $datos->input('correo');
        $usuario->status = $datos->input('status');
        $usuario->save();

        return Redirect('/consultarUsuarios');
    }

}
