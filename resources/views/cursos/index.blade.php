@extends('layouts.plantilla')

@section('title','index de cursos')

@section('content')

<h1>Bienvenido a la url de cursos</h1>
<a href="{{route('cursos.create')}}">Crear curso</a>
<ul>
    @foreach($cursos as $curso)
        <li>
            <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>
        </li>
    @endforeach

    {{$cursos->links()}}
</ul>

@endsection