Inicio del portal para usuarios
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Correo</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Telefono</th>
        <th scope="col">Sexo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$usuario->id_usuario}}</td>
           <td>{{$usuario->nombre}}</td>
           <td>{{$usuario->ap_paterno}}</td>
           <td>{{$usuario->ap_materno}}</td>
           <td>{{$usuario->correo}}</td>
           <td>{{$usuario->contrasena}}</td>
           <td>{{$usuario->telefono}}</td>
           <td>{{$usuario->sexo}}</td>
           <td>Editar
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