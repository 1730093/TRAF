<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only' => 'usuarios']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL ADMIN
//        $this->middleware('soloempleado',['only' => 'asistencia']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL EMPLEADO
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function usuarios()
    {
        return view('admin.usuarios.index');
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(User $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(User $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $asistencia)
    {
        //
    }


}
