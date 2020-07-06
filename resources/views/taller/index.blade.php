@extends('layouts.app')
@section('content')
<div class="container">
@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
  {{Session::get('Mensaje')}}
</div>

    
@endif
  <form method="POST"action="" class="form-row align-items-center p-2" >
<a class="btn btn-success  mb-2 "href="{{url('/taller/create')}}">Alta Herramienta</a>
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
        <th scope="col">Cantidad</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($herramientas as $herramienta)
        <tr>
           <td>{{$herramienta->id_herramienta}}</td>
           <td>{{$herramienta->nombre_herramienta}}</td>
           <td>{{$herramienta->cantidad_de_herramienta}}</td>          
           <td class="">
             <a class="btn btn-warning" href="{{url('/taller/'.$herramienta->id_herramienta.'/edit')}}">
              <strong>Modificar&nbsp</strong></a>
            <form method="POST"action="{{url('/taller/'.$herramienta->id_herramienta)}}" class="d-inline" >
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Borrar?{{$herramienta->id_herramienta}}');"><strong>Eliminar&nbsp;<i class="fas fa-trash"></i></strong></button>
        </form>
           </td>
          </tr>    
        @endforeach
    </tbody>
  </table>
</center>

  {{$herramientas->links()}}
</div>
  @endsection