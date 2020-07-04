<form action="{{url('/central')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}
  
        <div class="form-group">
            <label for="id_trailer">{{'id_trailer'}}</label>
            <input type="text" name="id_trailer"  id="id_trailer"class="form-control">
        </div>


        <div class="form-group">
            <label for="">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Color</label>
            <input type="text" name="color" id="color" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Numero de llantas</label>
            <input type="text" name="num_llantas" id="num_llantas" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Numero de cajas de carga</label>
            <input type="text" name="num_cajasdecarga"  id="num_cajasdecarga"class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">GUARDAR</button>
  
</form>