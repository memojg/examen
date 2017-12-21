<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class principalController extends Controller
{
    public function index(){
    	return view('inicio');
    }

    public function home(){
    	return view('inicio');
    }

    public function registrarUsuario(){
    	return view('registrarUsuarios');
    }

    public function registrarProducto(){
    	return view('registrarProducto');
    }
}
