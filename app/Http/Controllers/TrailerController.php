<?php

namespace App\Http\Controllers;

use App\trailer;
use Illuminate\Http\Request;

class TrailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['trailers'] = trailer::paginate(2);

        return view('central.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('central.create');
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
            "id_trailer" => 'required|numeric|unique:trailers',
            "marca" => 'required|string|',
            "modelo" => 'required|string|',
            "color" => 'required|string|',
            "num_llanta" => 'required|numeric',
            "num_cajasdecarga" => 'required|numeric'
        ];

        $Mensaje = ["required" => "El :attribute es requerido"];
        $this->validate($request, $campos, $Mensaje);
        $datosTrailer = request()->all();
        $datosTrailer = request()->except('_token');

        trailer::insert($datosTrailer);
             
                    
        return redirect('central')->with('Mensaje', 'Trailer Capturado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function show(trailer $trailer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trailer = trailer::where('id_trailer', $id)->first();

        return view('central.edit', compact('trailer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos = [
            "id_trailer" => 'required|numeric',
            "marca" => 'required|string|',
            "modelo" => 'required|string|',
            "color" => 'required|string|',
            "num_llanta" => 'required|numeric',
            "num_cajasdecarga" => 'required|numeric',
        ];
        $Mensaje = ["required" => "El :attribute es requerido"];
        $this->validate($request, $campos, $Mensaje);
        //
        $datosTrailer = request()->except(['_token', '_method']);
        trailer::where('id_trailer', '=', $id . '')->update($datosTrailer);

        //$trailers = trailer::where('id_trailer', $id)->first();

        //return view('usuarios.edit',compact('usuario'));
        return redirect('central')->with('Mensaje', 'Trailer Modificado con Exito');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        trailer::where('id_trailer', '=', $id . '')->delete();
        // usuarios_logeados::destroy($id_usuarios);
        return redirect('central');
    }
}
