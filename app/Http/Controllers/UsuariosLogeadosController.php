<?php

namespace App\Http\Controllers;

use App\usuarios_logeados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Input;
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
        $datos['usuarios'] = usuarios_logeados::paginate(2);

        return view('usuarios.index', $datos);
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
        //validaciones 
        $campos = [
            "id_usuario" => 'required|string|unique:usuarios_logeados',
            "nombre" => 'required|string|',
            "ap_paterno" => 'required|string|',
            "ap_materno" => 'required|string|',
            "correo" => 'required|unique:usuarios_logeados',
            "contrasena" => 'required|string|',
            "telefono" => 'required|min:11|numeric',
            "Sexo" => 'required'
        ];

        $Mensaje = ["required" => "El :attribute es requerido"];
        $this->validate($request, $campos, $Mensaje);
        $datosUsuarios = request()->all();
        $datosUsuarios = request()->except('_token');

        usuarios_logeados::insert($datosUsuarios);
             
                    
        return redirect('usuarios')->with('Mensaje', 'Usuario Capturado Correctamente');
        // return response()->json($datosUsuarios);
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
    public function edit($id)
    {
        //
        // $usuario=usuarios_logeados::findOrfail($id);//si se maneja un id por defecto auto increment
        //usuarios_logeados::where('slug', '=', 'about')->firstOrFail();
        //$usuario=usuarios_logeados::firstOrFail()->where('id_usuario=', $id.'');//si personalizamos el id
        $usuario = usuarios_logeados::where('id_usuario', $id)->first();

        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuarios_logeados  $usuarios_logeados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos = [
            "id_usuario" => 'required|string|',
            "nombre" => 'required|string|',
            "ap_paterno" => 'required|string|',
            "ap_materno" => 'required|string|',
            "correo" => 'required|string|email',
            "contrasena" => 'required|string|',
            "telefono" => 'required|min:11|numeric',
            "Sexo" => 'required'
        ];
        $Mensaje = ["required" => "El :attribute es requerido"];
        $this->validate($request, $campos, $Mensaje);
        //
        $datosUsuarios = request()->except(['_token', '_method']);
        usuarios_logeados::where('id_usuario', '=', $id . '')->update($datosUsuarios);

        //$usuario = usuarios_logeados::where('id_usuario', $id)->first();

        //return view('usuarios.edit',compact('usuario'));
        return redirect('usuarios')->with('Mensaje', 'Usuario Modificado con Exito');
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
        usuarios_logeados::where('id_usuario', '=', $id . '')->delete();
        // usuarios_logeados::destroy($id_usuarios);

        return redirect('usuarios');
    }
}
