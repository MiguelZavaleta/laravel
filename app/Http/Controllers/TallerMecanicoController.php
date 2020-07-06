<?php

namespace App\Http\Controllers;

use App\taller_mecanico;
use Illuminate\Http\Request;

class TallerMecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios'] = taller_mecanico::paginate(2);
        return view('taller.index', $datos);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('taller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            "id_herramienta" => 'required|string|',
            "nombre_herramienta" => 'required|string|',
            "cantidad_de_herramienta" => 'required|string|',
            
        ];

        $Mensaje = ["required" => "El :attribute es requerido"];
        $this->validate($request, $campos, $Mensaje);
        $datosHerramientas = request()->all();
        $datosHerramientas = request()->except('_token');

        taller_mecanico::insert($datosHerramientas);
             
                    
        return redirect('taller')->with('Mensaje', ' Herramienta Capturada Correctamente');
        // return response()->json($datosUsuarios);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\taller_mecanico  $taller_mecanico
     * @return \Illuminate\Http\Response
     */
    public function show(taller_mecanico $taller_mecanico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\taller_mecanico  $taller_mecanico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $herramienta = taller_mecanico::where('id_herramienta', $id)->first();

        return view('taller.edit', compact('herramienta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\taller_mecanico  $taller_mecanico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos = [
            "id_herramienta" => 'required|string|',
            "nombre_herramienta" => 'required|string|',
            "cantidad_de_herramienta" => 'required|string|',
            
        ];

        $Mensaje = ["required" => "El :attribute es requerido"];
        $this->validate($request, $campos, $Mensaje);
        //
        $datosHerramientas = request()->except(['_token', '_method']);
        taller_mecanico::where('id_herramienta', '=', $id . '')->update($datosHerramientas);

        $usuario = taller_mecanico::where('id_herramienta', $id)->first();

        //return view('usuarios.edit',compact('usuario'));
        return redirect('taller')->with('Mensaje', 'Usuario Modificado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\taller_mecanico  $taller_mecanico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        taller_mecanico::where('id_herramienta', '=', $id . '')->delete();
        // usuarios_logeados::destroy($id_usuarios);

        return redirect('taller');
    }
}
