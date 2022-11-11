@extends('layouts.plantilla')

@section('title','curso '.$curso->name)

@section('content')

    <h1>Bienvenido al curso {{$curso->name}}</h1>
    
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar curso</a>
    <br>
    <strong>Categoría: </strong>{{$curso->categoria}} <br/>
    <strong>Descripcion: </strong>{{$curso->descripcion}}

@endsection