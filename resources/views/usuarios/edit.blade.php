@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{url('/usuarios/'.$usuario->id_usuario)}}" method="post" enctype="">
    {{ csrf_field()}}
    {{method_field('PATCH')}}
    @include('usuarios.form',['Modo'=>'editar'])
   </form>
</div>
@endsection