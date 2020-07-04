<form action="{{url('/usuarios')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}
  
        <div class="form-group">
            <input type="text" 
            placeholder="Id del usuario"
            name="id_usuario"  
            id="id_usuario"class="form-control">
        </div>

        <div class="form-group">
            <input type="text" 
            placeholder="Nombre Completo"
            name="nombre" 
            id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" 
            name="ap_paterno" 
            placeholder="Apellido Paterno"
            id="ap_paterno" class="form-control">
        </div>

        <div class="form-group">
            <input type="text"
            placeholder="Apellido Materno"
             name="ap_materno"
              id="ap_materno" class="form-control">
        </div>

        <div class="form-group">
            <input type="text"
            placeholder="Correo Electronico"
             name="correo" 
             id="correo" class="form-control">
        </div>

        <div class="form-group">
            <input type="text"
            placeholder="Password"
             name="contrasena"  
             id="contrasena"class="form-control">
        </div>
        <div class="form-group">
            <input type="number"
            placeholder="Telefono"
             name="telefono"  
             id="telefono"class="form-control">
        </div>
        <label for="">Sexo</label>
        <div class="custom-control custom-radio">
            <input type="radio" 
            value="Masculino"
            id="Sexo" 
            name="Sexo" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1" >Masculino</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio"
             id="Sexo"
             name="Sexo" class="custom-control-input" value="Femenino">
            <label class="custom-control-label" for="customRadio2">Femenino</label>
          </div>


        <button type="submit" class="btn btn-primary">GUARDAR</button>
  
</form>