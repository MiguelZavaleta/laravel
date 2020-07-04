<form action="{{url('/central')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}
 <div class="form-group">
    <label for="">Numero de herramienta</label>
    <input type="text" name="id_herramienta" class="form-control">
</div>

<div class="form-group">
    <label for="">Nombre de la herramienta</label>
    <input type="text" name="nombre_herramienta" class="form-control">
</div>

<div class="form-group">
    <label for="">Cantidad de herramientas en existencia</label>
    <input type="text" name="cantidad_de_herramienta" class="form-control">
</div>



<button type="submit" class="btn btn-primary">GUARDAR</button>
</form>