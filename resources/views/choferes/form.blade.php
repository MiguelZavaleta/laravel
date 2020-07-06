
<div class="form-group">
    <input type="text" 
    placeholder="Id del Chofer"
    name="id_chofer"  
    id="id_chofer"class="form-control {{$errors->has('id_chofer')?'is-invalid':''}} "
     value="{{isset( $chofer->id_chofer)? $chofer->id_chofer:old('id_chofer')}}"
    >
</div>

<div class="form-group">
    <input type="text" 
    placeholder="Nombre"
    name="nombre_chofer" 
    id="nombre_chofer" class="form-control {{$errors->has('nombre_chofer')?'is-invalid':''}} "
     value="{{isset($chofer->nombre_chofer)?$chofer->nombre_chofer:old('nombre_chofer')}}"
    >
   
</div>
<div class="form-group">
    <input type="text" 
    name="ap_paterno" 
    placeholder="Apellido Paterno"
    id="ap_paterno" class="form-control {{$errors->has('ap_paterno')?'is-invalid':''}} "
    value="{{isset($chofer->ap_paterno)?$chofer->ap_paterno:old('ap_paterno')}}"
    >
</div>

<div class="form-group">
    <input type="text"
    placeholder="Apellido Materno"
     name="ap_materno"
      id="ap_materno" class="form-control {{$errors->has('ap_materno')?'is-invalid':''}} "
      value="{{isset($chofer->ap_materno)?$chofer->ap_materno:old('ap_materno')}}"
      >
</div>

<div class="form-group form-inline ">
    <input type="number"
    placeholder="Edad"
     name="edad" 
     id="edad" class="form-control col-1  mr-5 {{$errors->has('edad')?'is-invalid':''}}"
     value="{{isset($chofer->edad)?$chofer->edad:old('edad')}}">
     <input type="number"
    placeholder="Telefono"
     name="telefono"  
     id="telefono"class="form-control col-5 {{$errors->has('telefono')?'is-invalid':''}} "
     value="{{isset($chofer->telefono)?$chofer->telefono:old('telefono')}}"
     >
</div>

<div class="form-group">
<label for="">Sexo</label>
<div class="form-check">
    <input class="form-check-input {{$errors->has('Sexo')?'is-invalid':''}} " type="radio" 
    value="Masculino"
    id="sexo" 
    name="sexo" 
    {{isset($chofer->sexo)?($chofer->sexo=="Masculino"?'checked':""):''}}
    >
    <label class="form-check-label" for="gridRadios1">
      Masculino
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input {{$errors->has('Sexo')?'is-invalid':'' }}" type="radio" 
    id="sexo"
    value="Femenino"
    name="sexo"
    {{isset($chofer->sexo)?($chofer->sexo=="Femenino"?'checked':""):''}}
    >
    <label class="form-check-label" for="gridRadios2">
     Femenino
    </label>
  </div>

</div>



<button type="submit" class="btn btn-success" >{{$Modo=='crear'?'Agregar':'Modificar'}}<li class="{{$Modo=='crear'?'fas fa-user-plus':'fas fa-edit'}}"></li></button>
<a class="btn btn-primary" href="{{url('/choferes')}}">Regresar Nuevo</a>
