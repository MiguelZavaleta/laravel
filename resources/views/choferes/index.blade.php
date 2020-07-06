@extends('layouts.app')
@section('content')
<div class="container">
@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
  {{Session::get('Mensaje')}}
</div>

    
@endif
  <form method="POST"action="" class="form-row align-items-center p-2" >
<a class="btn btn-success  mb-2 "href="{{url('/choferes/create')}}">Alta chofer</a>
<!---<div class="col-md-4 offset-md-6">
  <label class="sr-only" for="inlineFormInputGroup">Buscador</label>
  <div class="input-group mb-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fab fa-searchengin"></i></div>
    </div>
    <input type="text" class="form-control" id="buscar" placeholder="Username">
</div>
</div>--->
  </form>
<br>
<center>
<table class="table table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Sexo</th>
        <th scope="col">Telefono</th>
        <th scope="col">------</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($choferes as $chofer)
        <tr>
           <td>{{$chofer->id_chofer }}</td>
           <td>{{$chofer->nombre_chofer .' '.$chofer->ap_paterno .' '.$chofer->ap_materno }}</td>     
           <td>{{$chofer->edad  }}</td>       
           <td>{{$chofer->sexo  }}</td>  
           <td>{{$chofer->telefono}}</td>          

           <td class="">
             <a class="btn btn-warning" href="{{url('/choferes/'.$chofer->id_chofer.'/edit')}}">
              <strong>Modificar&nbsp</strong></a>
            <form method="POST"action="{{url('/choferes/'.$chofer->id_chofer)}}" class="d-inline" >
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Borrar?{{$chofer->id_chofer}}');"><strong>Eliminar&nbsp;<i class="fas fa-trash"></i></strong></button>
        </form>
           </td>
          </tr>    
        @endforeach
    </tbody>
  </table>
</center>

  {{$choferes->links()}}
</div>
  @endsection