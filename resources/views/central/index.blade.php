@extends('layouts.app')
@section('content')
<div class="container">
@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
  {{Session::get('Mensaje')}}
</div>

    
@endif
  <form method="POST"action="" class="form-row align-items-center p-2" >
<a class="btn btn-success  mb-2 "href="{{url('/central/create')}}">Capturar Trailer <i class="fas fa-user-plus"></i></a>
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

<table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo Paterno</th>
        <th scope="col">Color Materno</th>
        <th scope="col">num_llanta</th>
        <th scope="col">Num_Remolques</th>
        <th scope="col">------------</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trailers as $trailer)
        <tr>
           <td>{{$trailer->id_trailer}}</td>
           <td>{{$trailer->marca}}</td>
           <td>{{$trailer->modelo}}</td>
           <td>{{$trailer->color}}</td>
           <td>{{$trailer->num_llanta}}</td>
           <td>{{$trailer->num_cajasdecarga}}</td>
           <td><a class="btn btn-warning" href="{{url('/central/'.$trailer->id_trailer.'/edit')}}"><strong>Modificar&nbsp<i class="fas fa-user-edit"></i></strong></a>
            <form method="POST"action="{{url('/central/'.$trailer->id_trailer)}}" class="d-inline" >
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Borrar?{{$trailer->id_trailer}}');"><strong>Eliminar&nbsp;<i class="fas fa-trash"></i></strong></button>
        </form>

           </td>
          </tr>
        @endforeach
    </tbody>
  </table>

  {{$trailers->links()}}
</div>
  @endsection