@extends('layouts.app')
@section('content')
<div class="container">
@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
  {{Session::get('Mensaje')}}
</div>

    
@endif
  <form method="POST"action="" class="form-row align-items-center p-2" >
<a class="btn btn-success  mb-2 "href="{{url('/usuarios/create')}}">Crear Usuario Nuevo <i class="fas fa-user-plus"></i></a>
<!---<div class="col-md-4 offset-md-6">
  <label class="sr-only" for="inlineFormInputGroup">Buscador</label>
  <div class="input-group mb-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fab fa-searchengin"></i></div>
    </div>
    <input type="text" class="form-control" id="buscar" placeholder="Username">
</div>
</div>--->
  </form>
<br>

<table class="table table-hover">
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
           <td>{{$usuario->sexo}}</td>*/
           <td><a class="btn btn-warning" href="{{url('/usuarios/'.$usuario->id_usuario.'/edit')}}"><strong>Modificar&nbsp<i class="fas fa-user-edit"></i></strong></a>
            <form method="POST"action="{{url('/usuarios/'.$usuario->id_usuario)}}" class="d-inline" >
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Borrar?{{$usuario->id_usuario}}');"><strong>Eliminar&nbsp;<i class="fas fa-trash"></i></strong></button>
        </form>

           </td>
          </tr>
    
        @endforeach
      
    </tbody>
  </table>

  {{$usuarios->links()}}
</div>
  @endsection