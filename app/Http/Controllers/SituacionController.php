<?php

namespace App\Http\Controllers;

use App\Models\Situacion;
use Illuminate\Http\Request;

class SituacionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only' => 'situaciones']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL ADMIN
        $this->middleware('soloempleado',['only' => 'situacion']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL EMPLEADO

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

    public function situaciones()
    {
        return view('admin.situaciones.index');
    }

    public function situacion()
    {
        return view('user.situaciones.index');
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
     * @param  \App\Models\Situacion  $situacion
     * @return \Illuminate\Http\Response
     */
    public function show(Situacion $situacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Situacion  $situacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Situacion $situacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Situacion  $situacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Situacion $situacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Situacion  $situacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Situacion $situacion)
    {
        //
    }
}
