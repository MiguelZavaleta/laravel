<div class="form-group">
    <label for="id_trailer">{{'id_trailer'}}</label>
    <input type="text" name="id_trailer"  id="id_trailer"class="form-control  {{$errors->has('id_trailer')?'is-invalid':''}}"
    value="{{isset($trailer->id_trailer)?$trailer->id_trailer:old('id_trailer')}}">
</div>


<div class="form-group">
    <label for="">Marca</label>
    <input type="text" name="marca" id="marca" class="form-control  {{$errors->has('marca')?'is-invalid':''}}"
    value="{{isset($trailer->marca)?$trailer->marca:old('$trailer->marca')}}">
</div>

<div class="form-group">
    <label for="">Modelo</label>
    <input type="text" name="modelo" id="modelo" class="form-control  {{$errors->has('modelo')?'is-invalid':''}}"
    value="{{isset($trailer->modelo)?$trailer->modelo:old('modelo')}}">
</div>

<div class="form-group">
    <label for="">Color</label>
    <input type="text" name="color" id="color" class="form-control  {{$errors->has('color')?'is-invalid':''}}"
    value="{{isset($trailer->color)?$trailer->color:old('color')}}">
</div>

<div class="form-group">
    <label for="">Numero de llantas</label>
    <input type="text" name="num_llanta" id="num_llanta" class="form-control  {{$errors->has('num_llanta')?'is-invalid':''}}"
    value="{{isset($trailer->num_llanta)?$trailer->num_llanta:old('num_llanta')}}">
</div>

<div class="form-group">
    <label for="">Numero de cajas de carga</label>
    <input type="text" name="num_cajasdecarga"  id="num_cajasdecarga"class="form-control  {{$errors->has('num_cajasdecarga')?'is-invalid':''}}"
    value="{{isset($trailer->num_cajasdecarga)?$trailer->num_cajasdecarga:old('num_cajasdecarga')}}">
</div>

<button type="submit" class="btn btn-primary">GUARDAR</button>