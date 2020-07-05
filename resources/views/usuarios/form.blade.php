
<div class="form-group">
    <input type="text" 
    placeholder="Id del usuario"
    name="id_usuario"  
    id="id_usuario"class="form-control"
     value="{{isset($usuario->id_usuario)?$usuario->id_usuario:''}}"
    >
</div>

<div class="form-group">
    <input type="text" 
    placeholder="Nombre Completo"
    name="nombre" 
    id="nombre" class="form-control"
     value="{{isset($usuario->nombre)?$usuario->nombre:''}}"
    >
</div>
<div class="form-group">
    <input type="text" 
    name="ap_paterno" 
    placeholder="Apellido Paterno"
    id="ap_paterno" class="form-control"
    value="{{isset($usuario->ap_paterno)?$usuario->ap_paterno:''}}"
    >
</div>

<div class="form-group">
    <input type="text"
    placeholder="Apellido Materno"
     name="ap_materno"
      id="ap_materno" class="form-control"
      value="{{isset($usuario->ap_materno)?$usuario->ap_materno:''}}"
      >
</div>

<div class="form-group">
    <input type="text"
    placeholder="Correo Electronico"
     name="correo" 
     id="correo" class="form-control"
     value="{{isset($usuario->correo)?$usuario->correo:''}}"
     >
</div>

<div class="form-group">
    <input type="text"
    placeholder="Password"
     name="contrasena"  
     id="contrasena"class="form-control"
     value="{{isset($usuario->contrasena)?$usuario->contrasena:''}}"
     >
</div>
<div class="form-group">
    <input type="number"
    placeholder="Telefono"
     name="telefono"  
     id="telefono"class="form-control"
     value="{{isset($usuario->telefono)?$usuario->telefono:''}}"
     >
</div>
<label for="">Sexo</label>
<div class="custom-control custom-radio">
    <input type="radio" 
    value="Masculino"
    id="Sexo" 
    name="Sexo" class="custom-control-input"
     {{isset($usuario->sexo)?($usuario->sexo=="Masculino"?'checked':""):''}}>
    <label class="custom-control-label" for="customRadio1" >Masculino</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio"
     id="Sexo"
     name="Sexo" class="custom-control-input" value="Femenino"
      {{isset($usuario->sexo)?($usuario->sexo=="Femenino"?'checked':""):''}}>
    <label class="custom-control-label" for="customRadio2">Femenino</label>
  </div>


<button type="submit" class="btn btn-success" >{{$Modo=='crear'?'Agregar':'Modificar'}}</button>
{{$Modo=='crear'?'fas fa-user-plus':'fas fa-edit'}}
<a class="btn btn-primary" href="{{url('/usuarios')}}">Regresar Nuevo<i class="fas fa-edit"></i> </a>
