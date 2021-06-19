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
        $this->middleware('soloadmin',['only' => 'inicio']);
        $this->middleware('soloempleado',['only' => 'getuser']);

        //$this->middleware('soloadmin');

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

    public function inicio()
    {
        return view('admin.inicio.inicio');
    }

    public function getuser(){
        return view('user.inicio.inicio');
    }
}
