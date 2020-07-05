@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/usuarios')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}
 @include('usuarios.form',['Modo'=>'crear']);
    
</form>
</div>
@endsection