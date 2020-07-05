@extends('layouts.app')
@section('content')
<div class="container">
@if (Session::has('Mensaje')){{
  Session::get('Mensaje')
}}
    
@endif
<a class="btn btn-success"href="{{url('/usuarios/create')}}">Crear Usuario Nuevo</a>
<br><br>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Correo</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Telefono</th>
        <th scope="col">Sexo</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
           <td>{{$usuario->id_usuario}}</td>
           <td>{{$usuario->nombre}}</td>
           <td>{{$usuario->ap_paterno}}</td>
           <td>{{$usuario->ap_materno}}</td>
           <td>{{$usuario->correo}}</td>
           <td>{{$usuario->contrasena}}</td>
           <td>{{$usuario->telefono}}</td>
           <td>{{$usuario->sexo}}</td>
           <td><a
            href="{{url('/usuarios/'.$usuario->id_usuario.'/edit')}}">Editar</a>

            <form method="POST"action="{{url('/usuarios/'.$usuario->id_usuario)}}" >

            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar?{{$usuario->id_usuario}}');">Borrar</button>
        </form>

           </td>
          </tr>
    
        @endforeach
      
    </tbody>
  </table>
</div>
  @endsection