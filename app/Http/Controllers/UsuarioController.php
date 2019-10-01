<?php

namespace App\Http\Controllers;

use App\Usuario;
use CreateUsuariosTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Ubicacion;
use Input;



class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::orderBy('id','DESC')->paginate(20);
        return view('usuarios.inicio',compact('usuarios'));
       // $datos['usuarios']=Usuario::paginate(5);
       // return view('usuarios.inicio',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=Ubicacion::all();
        return view('usuarios.create',compact('Ubicacions'));
        //return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $datosUsuario = request()-> except('_token');
       usuario::insert($datosUsuario);
       return redirect('usuarios')->with('Mensaje','Usuario agregado con éxito');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    //public function show(Usuario $usuario)

    public function show($id)
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //return view('usuarios.edit');
        $usuario=Usuario::findOrFail($id);
        return view('usuarios.edit',compact('usuario')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuario = request()-> except(['_token','_method']);
        Usuario::where('id','=',$id)->update($datosUsuario);

        $usuario=Usuario::findOrFail($id);
        //return view('usuarios.edit',compact('usuario'));

        return redirect('usuarios')->with('Mensaje','Usuario modifidado con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario=Usuario::findOrFail($id);
        Usuario::destroy($id);
        return redirect('usuarios')->with('Mensaje','Usuario borrado con exito');
    }    

}
