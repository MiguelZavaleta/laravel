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

<form action="{{url('/taller/'.$herramienta->id_herramienta)}}" method="post" enctype="">
    {{ csrf_field()}}
    {{method_field('PATCH')}}
    @include('taller.form',['Modo'=>'editar'])
   </form>
</div>
@endsection