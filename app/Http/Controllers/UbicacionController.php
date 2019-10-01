<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Usuario;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['ubicacion']=Ubicacion::paginate(15);
        return view('ubicacion.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ubicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //$datosUbicacion=request()->all();
        $datosUbicacion=request()->except('_token');
        Ubicacion::insert($datosUbicacion);
        //return response()->json($datosUbicacion);
         return redirect('ubicacion')->with('Mensaje','Ubicacion agregada con exito');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
     $ubicacion= Ubicacion::findOrFail($id);
     return view('ubicacion.edit', compact('ubicacion'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Ubicacion $ubicacion
        $datosUbicacion=request()->except(['_token','_method']);
        Ubicacion::where('id','=',$id)->update($datosUbicacion);

        // $ubicacion = Ubicacion::findOrFail($id);
        // return view('ubicacion.edit', compact('ubicacion'));

         return redirect('ubicacion')->with('Mensaje','Ubicacion modificada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ubicacion= Ubicacion::findOrFail($id);

        Ubicacion::destroy($id);

        return redirect('ubicacion')->with('Mensaje','Ubicacion eliminada con exito');
    }
}
