<?php

namespace App\Http\Controllers;

use App\choferes;
use Illuminate\Http\Request;

class ChoferesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['choferes'] = choferes::paginate(2);
        return view('choferes.index', $datos);
    
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('choferes.create');
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
        $campos = [
            "id_chofer"=>'required|numeric|unique:choferes',
            "nombre_chofer"=>'required|string|',
            "ap_paterno"=>'required|string|',
            "ap_materno"=>'required|string|',
            "edad"=>'required|min:1|numeric|digits_between:1,99',
            "sexo"=>'required|string|',
            "telefono"=>'required|min:11|numeric',
            
        ];
        $Mensaje = ["required" => "El :attribute es requerido"];
        $this->validate($request, $campos, $Mensaje);
        $datoschofer = request()->all();
        $datoschofer = request()->except('_token');

        choferes::insert($datoschofer);
                      
        return redirect('choferes')->with('Mensaje', ' Chofer Capturado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\choferes  $choferes
     * @return \Illuminate\Http\Response
     */
    public function show(choferes $choferes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\choferes  $choferes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $chofer = choferes::where('id_chofer', $id)->first();

        return view('choferes.edit', compact('chofer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\choferes  $choferes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos = [
            "id_chofer"=>'required|numeric',
            "nombre_chofer"=>'required|string|',
            "ap_paterno"=>'required|string|',
            "ap_materno"=>'required|string|',
            "edad"=>'required|min:1|numeric|digits_between:1,99',
            "sexo"=>'required|string|',
            "telefono"=>'required|min:11|numeric',
            
        ];
        $Mensaje = ["required" => "El :attribute es requerido"];
        $this->validate($request, $campos, $Mensaje);
        //
        $datoschofer = request()->except(['_token', '_method']);
        choferes::where('id_chofer', '=', $id . '')->update($datoschofer);

        $usuario = choferes::where('id_chofer', $id)->first();
        //return view('usuarios.edit',compact('usuario'));
        return redirect('choferes')->with('Mensaje', 'Usuario Modificado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\choferes  $choferes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        choferes::where('id_chofer', '=', $id . '')->delete();
        // usuarios_logeados::destroy($id_usuarios);
        return redirect('choferes');

    }
}
