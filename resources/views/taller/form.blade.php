<div class="form-group">
    <label for="">Numero de herramienta</label>
    <input type="text" name="id_herramienta" 
    class="form-control {{$errors->has('id_herramienta')?'is-invalid':''}} "
    value="{{isset($herramienta->id_herramienta)?$herramienta->id_herramienta:old('id_herramienta')}}">
</div>

<div class="form-group">
    <label for="">Nombre de la herramienta</label>
    <input type="text" name="nombre_herramienta" class="form-control  {{$errors->has('nombre_herramienta')?'is-invalid':''}} "
    value="{{isset($herramienta->nombre_herramienta)?$herramienta->nombre_herramienta:old('nombre_herramienta')}}"
    >
</div>

<div class="form-group">
    <label for="">Cantidad de herramientas en existencia</label>
    <input type="text" name="cantidad_de_herramienta" class="form-control {{$errors->has('cantidad_de_herramienta')?'is-invalid':''}}"
    value="{{isset($herramienta->cantidad_de_herramienta)?$herramienta->cantidad_de_herramienta:old('cantidad_de_herramienta')}}"
    >
</div>



<button type="submit" class="btn btn-primary">GUARDAR</button>