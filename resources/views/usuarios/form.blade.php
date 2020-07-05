
<div class="form-group">
    <input type="text" 
    placeholder="Id del usuario"
    name="id_usuario"  
    id="id_usuario"class="form-control {{$errors->has('id_usuario')?'is-invalid':''}} "
     value="{{isset($usuario->id_usuario)?$usuario->id_usuario:old('id_usuario')}}"
    >
</div>

<div class="form-group">
    <input type="text" 
    placeholder="Nombre Completo"
    name="nombre" 
    id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}} "
     value="{{isset($usuario->nombre)?$usuario->nombre:old('nombre')}}"
    >
</div>
<div class="form-group">
    <input type="text" 
    name="ap_paterno" 
    placeholder="Apellido Paterno"
    id="ap_paterno" class="form-control {{$errors->has('ap_paterno')?'is-invalid':''}} "
    value="{{isset($usuario->ap_paterno)?$usuario->ap_paterno:old('ap_paterno')}}"
    >
</div>

<div class="form-group">
    <input type="text"
    placeholder="Apellido Materno"
     name="ap_materno"
      id="ap_materno" class="form-control {{$errors->has('ap_materno')?'is-invalid':''}} "
      value="{{isset($usuario->ap_materno)?$usuario->ap_materno:old('ap_materno')}}"
      >
</div>

<div class="form-group">
    <input type="text"
    placeholder="Correo Electronico"
     name="correo" 
     id="correo" class="form-control  {{$errors->has('correo')?'is-invalid':''}}"
     value="{{isset($usuario->correo)?$usuario->correo:old('correo')}}"
     >
</div>

<div class="form-group">
    <input type="text"
    placeholder="Password"
     name="contrasena"  
     id="contrasena"class="form-control {{$errors->has('contrasena')?'is-invalid':''}} "
     value="{{isset($usuario->contrasena)?$usuario->contrasena:old('contrasena')}}"
     >
</div>
<div class="form-group">
    <input type="number"
    placeholder="Telefono"
     name="telefono"  
     id="telefono"class="form-control {{$errors->has('telefono')?'is-invalid':''}} "
     value="{{isset($usuario->telefono)?$usuario->telefono:old('telefono')}}"
     >
</div>
<div class="form-group">
<label for="">Sexo</label>
<div class="form-check">
    <input class="form-check-input {{$errors->has('Sexo')?'is-invalid':''}} " type="radio" value="Masculino"
    id="Sexo" 
    name="Sexo" 
    {{isset($usuario->sexo)?($usuario->sexo=="Masculino"?'checked':""):''}}
    >
    <label class="form-check-label" for="gridRadios1">
      Masculino
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input {{$errors->has('Sexo')?'is-invalid':'' }}" type="radio" 
    id="Sexo"
    value="Femenino"
    name="Sexo"
    {{isset($usuario->sexo)?($usuario->sexo=="Femenino"?'checked':""):''}}
    >
    <label class="form-check-label" for="gridRadios2">
     Femenino
    </label>
  </div>

</div>



<button type="submit" class="btn btn-success" >{{$Modo=='crear'?'Agregar':'Modificar'}}<li class="{{$Modo=='crear'?'fas fa-user-plus':'fas fa-edit'}}"></li></button>
<a class="btn btn-primary" href="{{url('/usuarios')}}">Regresar Nuevo</a>
