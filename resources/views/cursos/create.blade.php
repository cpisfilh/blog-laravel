@extends('layouts.plantilla')

@section('title','Crear curso')

@section('content')

    <h1>para crear un curso</h1>
    
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
        <br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" rows="5"></textarea>
    </label>
<br>
    <label>
        Categoría:
        <br>
        <input type="text" name="categoria">
    </label>
    <br>
    <button type="submit">Enviar formulario</button>

    </form>
    

@endsection