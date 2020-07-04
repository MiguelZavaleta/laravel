<form action="{{url('/central')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}
  
 <div class="form-group">
    <label for="">Numero de chofer</label>
    <input type="text" name="id_chofer" class="form-control">
</div>

<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
    <label for="">Apellido Paterno</label>
    <input type="text" name="Apellido_paterno" class="form-control">
</div>

<div class="form-group">
    <label for="">Apellido Materno</label>
    <input type="text" name="Apellido_materno" class="form-control">
</div>

<div class="form-group">
    <label for="">Edad</label>
    <input type="text" name="Edad" class="form-control">
</div>

<div class="form-group">
    <label for="">Sexo</label>
    <input type="text" name="Sexo" class="form-control">
</div>

<div class="form-group">
    <label for="">Telefono</label>
    <input type="text" name="Telefono" class="form-control">
</div>


<button type="submit" class="btn btn-primary">GUARDAR</button>
</form>