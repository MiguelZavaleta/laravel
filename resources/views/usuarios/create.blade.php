@extends('layouts.app')
@section('content')
<div class="container">
@if (count($errors))
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>        
@endif

<form action="{{url('/usuarios')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
 {{ csrf_field()}}
 @include('usuarios.form',['Modo'=>'crear'])
    
</form>


</div>
@endsection