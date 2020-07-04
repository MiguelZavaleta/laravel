<?php

namespace App\Http\Controllers;

use App\usuarios_logeados;
use Illuminate\Http\Request;

class UsuariosLogeadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios']=usuarios_logeados::paginate(5);
        return view('usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
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
        $datosUsuarios=request()->all();
        $datosUsuarios=request()->except('_token');

        usuarios_logeados::insert($datosUsuarios);

        return response()->json($datosUsuarios);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuarios_logeados  $usuarios_logeados
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios_logeados $usuarios_logeados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuarios_logeados  $usuarios_logeados
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios_logeados $usuarios_logeados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuarios_logeados  $usuarios_logeados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios_logeados $usuarios_logeados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuarios_logeados  $usuarios_logeados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        usuarios_logeados::where('id_usuario', '=', $id.'')->delete();
       // usuarios_logeados::destroy($id_usuarios);

        return redirect('usuarios');

    }
}
