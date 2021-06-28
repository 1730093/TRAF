<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ActividadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('soloadmin', ['only' => 'inicio']); //AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL ADMIN
        //$this->middleware('soloempleado', ['only' => 'getuser']); //AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL EMPLEADO

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        switch (Auth::user()->id_rol) {
            case ('1'):
                
                return view('admin.inicio.inicio');
            default:
            $actividades = Actividad::get();
            //$users = User::get();

                return view('user.inicio.inicio', compact('actividades'));

                //return view('home');
                //return view('admin.inicio.inicio');
        }
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
   
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $urlimagenes = [];
        if($request->hasFile('imagenes')){
            $imagenes = $request->file('imagenes');
            foreach($imagenes as $imagen){
                $nombre = time().'_'.$imagen->getClientOriginalName();
                $ruta = public_path().'/imagenes';
                $imagen->move($ruta,$nombre);
                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }
        }
        $actividad = Actividad::findOrFail($id);
        $actividad->estado= 'Concluido';   
        $actividad->save();    
        $actividad->images()->createMany($urlimagenes);
        
        return redirect()->route('actividades.index')->with('datos','Registro creado correctamente.');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Actividad $actividad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        //
    }
}
