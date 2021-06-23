<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only' => 'inicio']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL ADMIN
        $this->middleware('soloempleado',['only' => 'getuser']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL EMPLEADO

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        //return view('admin.inicio.inicio');
    }
    //ADMINISTRADORES
    public function inicio()
    {
        return view('admin.inicio.inicio');
    }

  

    //EMPLEADOS

    public function getuser(){
        return view('user.inicio.inicio');
    }

   
}
